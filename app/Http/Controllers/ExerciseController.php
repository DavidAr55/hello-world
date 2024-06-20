<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function ejecutar(Request $request)
    {
        // Validar la entrada (en este caso, solo el código)
        $request->validate([
            'codigo' => 'required|string',
        ]);

        // Obtener el código enviado desde el frontend
        $codigo = $request->input('codigo');

        // Guardar el código en un archivo temporal
        $tempPath = storage_path('app/public/temp-code');
        $archivo = tempnam($tempPath, 'exercise-');
        $tempFileName = basename($archivo, '.tmp') . '.cpp';
        $codigoFilePath = $tempPath . '/' . $tempFileName;
        file_put_contents($codigoFilePath, $codigo);

        // Preparar la ejecución del código
        $cmd = "g++ -o " . $tempPath . "/program " . $codigoFilePath . " && " . $tempPath . "/program";

        // Ejecutar el comando y obtener la salida
        $salida = [];
        $tiempo_inicio = microtime(true);
        $exitCode = -1;
        exec($cmd, $salida, $exitCode);
        $tiempo_fin = microtime(true);
        $tiempo_ejecucion = number_format(($tiempo_fin - $tiempo_inicio) * 1000, 2) . " ms";

        // Eliminar el archivo de código temporal
        unlink($codigoFilePath);

        // Construir la respuesta JSON para enviar al frontend
        $respuesta = [
            'salida' => implode("\n", $salida),
            'tiempo_ejecucion' => $tiempo_ejecucion,
        ];

        return response()->json($respuesta);
    }
}

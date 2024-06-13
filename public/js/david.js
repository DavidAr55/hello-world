const horizontalDivider = document.querySelector('.horizontal-divider');
const splitPane = document.querySelector('.split-pane');
const leftPane = document.querySelector('.left-pane');
const rightPane = document.querySelector('.right-pane');

let isDraggingHorizontal = false;

horizontalDivider.addEventListener('mousedown', (e) => {
    isDraggingHorizontal = true;
    document.addEventListener('mousemove', handleHorizontalMouseMove);
    document.addEventListener('mouseup', handleHorizontalMouseUp);
});

function handleHorizontalMouseMove(e) {
    if (!isDraggingHorizontal) return;

    const containerOffsetLeft = splitPane.offsetLeft;
    const newLeftWidth = e.clientX - containerOffsetLeft;
    const newRightWidth = splitPane.clientWidth - newLeftWidth - horizontalDivider.offsetWidth;

    leftPane.style.width = `${newLeftWidth}px`;
    rightPane.style.width = `${newRightWidth}px`;

    horizontalDivider.style.left = `${newLeftWidth}px`;
}

function handleHorizontalMouseUp() {
    isDraggingHorizontal = false;
    document.removeEventListener('mousemove', handleHorizontalMouseMove);
    document.removeEventListener('mouseup', handleHorizontalMouseUp);
}

const verticalDivider = document.querySelector('.vertical-divider');
const splitPaneVertical = document.querySelector('.split-pane-vertical');
const topPane = document.querySelector('.top-pane');
const bottomPane = document.querySelector('.bottom-pane');

let isDraggingVertical = false;

verticalDivider.addEventListener('mousedown', (e) => {
    isDraggingVertical = true;
    document.addEventListener('mousemove', handleVerticalMouseMove);
    document.addEventListener('mouseup', handleVerticalMouseUp);
});

function handleVerticalMouseMove(e) {
    if (!isDraggingVertical) return;

    const containerOffsetTop = splitPaneVertical.offsetTop;
    const newTopHeight = e.clientY - containerOffsetTop;
    const newBottomHeight = splitPaneVertical.clientHeight - newTopHeight - verticalDivider.offsetHeight;

    topPane.style.height = `${newTopHeight}px`;
    bottomPane.style.height = `${newBottomHeight}px`;

    verticalDivider.style.top = `${newTopHeight}px`;
}

function handleVerticalMouseUp() {
    isDraggingVertical = false;
    document.removeEventListener('mousemove', handleVerticalMouseMove);
    document.removeEventListener('mouseup', handleVerticalMouseUp);
}

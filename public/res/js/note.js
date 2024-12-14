const noteList = document.getElementById("note-list");
const items = Array.from(noteList.children);

// Loop untuk menambahkan divider
items.forEach((item, index) => {
    if (index < items.length - 1) {
        const divider = document.createElement("div");
        divider.className = "mx-4 border"; // Divider dengan margin horizontal
        noteList.insertBefore(divider, items[index + 1]);
    }
});

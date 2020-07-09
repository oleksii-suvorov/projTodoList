export const isCompletedChecker = (list) => {
    if(list.classList.contains("done")) {
        list.className = "lists notdone";
        console.log(`Your task: "${list.innerText}" marked us undone.`);
    } else {
        list.className = "lists done"
        console.log(`Your task: "${list.innerText}" marked us done.`);
    }
}

export const borderChecker = (lists, mainTodos) => {
    if(lists.length === 0) {
        mainTodos.classList.add("empty");
    } else {
        mainTodos.classList.remove("empty");
    }
}
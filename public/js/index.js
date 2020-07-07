window.addEventListener("DOMContentLoaded", () => {
    let delButton = document.getElementsByClassName("delete");
    let lists = document.getElementsByClassName("lists");

    Array.from(delButton).forEach(btn => {
        btn.addEventListener("click", () => {
            btn.parentNode.remove();
            let todoId = btn.parentNode.getAttribute("todoid");
            fetch(`/todos/removeId=${todoId}`, {
                method: "DELETE"
            }).then(response => {
            console.log(response);
            }).catch(err => {
               console.log(err);
            });
        })
    })

    Array.from(lists).forEach(list => {
        list.addEventListener("click", () => {
            let todoId = list.getAttribute("todoid");
            if(list.classList.contains("done")) {
                list.className = "lists notdone";
            } else {
                list.className = "lists done"
            }
            fetch(`/todos/changeStatus=${todoId}`, {
                method: "POST"
            }).then(response => {
                console.log(response);
            }).catch(err => {
                console.log(err);
            });
        })
    });

})
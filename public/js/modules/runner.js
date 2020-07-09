import {borderChecker, isCompletedChecker} from "./helpers.checkers.js";
import {deleteRequest, postRequestChangeStatus} from "./helpers.async.js";
const lists = document.getElementsByClassName("lists");
const mainTodos = document.getElementsByTagName("main")[0];
const delButton = document.getElementsByClassName("delete");

export let run = () => {
    Array.from(delButton).forEach(btn => {
        btn.addEventListener("click", async event => {
            let todoId = btn.parentNode.getAttribute("todoid");
            event.stopPropagation();
            btn.parentNode.remove();
            borderChecker(lists, mainTodos);
            await deleteRequest(todoId);
        });
    });

    Array.from(lists).forEach(list => {
        list.addEventListener("click", () => {
            let todoId = list.getAttribute("todoid");
            isCompletedChecker(list);
            postRequestChangeStatus(todoId);
        })
    });

}
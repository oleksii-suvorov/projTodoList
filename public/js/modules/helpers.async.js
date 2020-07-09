export const deleteRequest = async todoId => {
    const response = await fetch(`/todos/removeId=${todoId}`, {
        method: "DELETE"
    }).then(response => {
        if(response.ok) {
            console.log("Todo: " + todoId + " was succesfully removed from task list");
        }
    }).catch(err => {
        console.log(err);
    });
    //we could do something with response if we'd like
    return response;
}

export const postRequestChangeStatus = async todoId => {
    const response = await fetch(`/todos/changeStatus=${todoId}`, {
        method: "POST"
    }).then(response => {

    }).catch(err => {
        console.log(err);
    });
    //we could do something with response if we'd like
    return response;
}
$(document).ready(function() {
    $(".addTask").click(function(){
        $("#modal-task .modal-title").text('New Task')
        $('.addingOrUpdateingTask').find('.boxed').text('')
        $('.addingOrUpdateingTask').attr('action', '/admin/task')
        $('#modal-task').modal('show')
    })
    
    $(".editTask").click(function(){
        var taskId = $(this).data('id')
        var taskBody = $(this).closest('.taskBody').find('.taskBodyText').text()
        $("#modal-task .modal-title").text('Edit Task')        
        $('.addingOrUpdateingTask').attr('action', '/admin/task/'+taskId)
        $('.addingOrUpdateingTask').find('.boxed').text(taskBody)
        $('#modal-task').modal('show')
    })

    $(".removeTask").click(function(){
        var taskId = $(this).data('id')
        $('.confirmDelete').attr('href', '/admin/task/'+taskId)
        $('#delete-modal').modal('show')
    })

    $(".showTask").click(function(){
        var taskBody = $(this).closest('.taskBody').find('.taskBodyText').text()
        var taskDate = $(this).closest('.taskBody').find('.taskDate').text()
        $("#show-modal .modal-title").text(taskDate)        
        $("#show-modal .modal-body").text(taskBody)        
        $('#show-modal').modal('show')
    })
    
    $(".checkbox").change(function() {
        if(this.checked) {
            var completed = 1
        }else{
            var completed = 0;
        }
        var taskId = $(this).data('id')
        $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.post("/admin/update/task", {completed, taskId}, function(data, status){
            console.log(data)
        }, "json")
    });
})
    
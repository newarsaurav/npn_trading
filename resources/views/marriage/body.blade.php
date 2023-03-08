<div class="container">
    <div class="row">
        <div>
            <h1>
                WelCome to Marriage Counter!!
            </h1>
        </div>
    </div>
    <div class="new_game">
        <div> <button class="btn btn-primary" id="start_game"> New Game</button></div>
    </div>
    <div class="add_player display_none">
        <div id="add_player_data">
            <span><input type="hidden" name="game_id"></span>
            @csrf
            <button class="btn btn-primary" id="add_player_btn"> Add Player</button>
            <input type="text" name="add_player">
            <span><button class="btn btn-info">Start Game</button></span>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr scope="col">
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="player_data_table">

                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    $("#start_game").off('click').on('click', function() {
        $.get(`marriage/start_game`).then(function(success) {
            console.log(success);
            $('.new_game').addClass('display_none');
            $('.add_player').removeClass('display_none');
            $('[name="game_id"]').val(success.data.id);
        })
    });


    $("#add_player_btn").off('click').on('click', function() {
        let data = $("#add_player_data :input").serializeArray();
        const game_id = $("[name='game_id']").val();

        $.get(`marriage/check_no_of_player`, {
            game_id: game_id
        }).then(function(count) {
            if (count < 4) {
                if (game_id) {
                    $.post(`/marriage/add_player`, data).then(function(success) {
                        $('#player_data_table').append(`
                    <tr>
                        <td>#</td>
                        <td>${success.data.name}</td>
                        <td>
                            <span class="edit_player_name" data-id=${success.data.id} style="padding-right:25px;"><i class="bi bi-pencil-square"></i></span>
                            <span class="delete_player_name" data-id=${success.data.id}><i class="bi bi-trash3"></i></span>
                        </td>
                    </tr>
                `);
                        $("[name='add_player']").val("");
                    });
                }
            } else {
                alert('Only 4 player can be added.');
            }
        });

    });

    function number_of_player($game_id) {

        $.get(`marriage/check_no_of_player`, {
            game_id: $game_id
        }).then(function(count) {
            return count;
        });
    }


    $(".edit_player_name").on('click', function() {
        const id = $(this).attr('data-id');
        $.post(`/marriage/update_player`, {
            id: id
        }).then(function(resp) {

        })
    });

    $(".delete_player_name").on('click', function() {
        const id = $(this).attr('data-id');
        $.post(`/marriage/delete_player`, {
            id: id
        }).then(function(resp) {

        })
    });
</script>
@include('marriage._includes.script')
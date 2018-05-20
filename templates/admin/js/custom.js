$(document).ready(function() {
    $('#checkAll').click(function(event) {
        if ($(this).prop('checked') == true){
            $('.checkbox').prop('checked', true);
        } else {
            $('.checkbox').prop('checked', false);
        }
    });
    $('input[type="checkbox"]').click(function(){
        
        var ids = [];
        $('input[name=ids]:checked').each ( function(i) {
            ids[i] = $(this).attr('id');
        });
        if (ids.length > 0) {
            $('.del').removeClass('hidden');
        }else{
            $('.del').addClass('hidden');
        }
    })  
    
    $('#btnDelContact').click(function(event) {
        var ids = [];
        $('input[name=ids]:checked').each ( function(i) {
            ids[i] = $(this).attr('id');
        });
        $.ajax({
            url: '/profile/admin/contact/deleteAll.php',
            type: 'post',
            data: {
                ids: ids
            },
            success: function( data ) {
                $('.del').addClass('hidden')
                alert("deleted success")
                $("#data").html(data);
            }
        });
    });

    $('#btnDelSkills').click(function(event) {
        var ids = [];
        $('input[name=ids]:checked').each ( function(i) {
            ids[i] = $(this).attr('id');
        });
        $.ajax({
            url: '/profile/admin/skills/deleteAll.php',
            type: 'post',
            data: {
                ids: ids
            },
            success: function( data ) {
                $('.del').addClass('hidden')
                alert("deleted success")
                $("#data").html(data);
            }
        });
    });

    $('#btnDelExperiences').click(function(event) {
        var ids = [];
        $('input[name=ids]:checked').each ( function(i) {
            ids[i] = $(this).attr('id');
        });
        $.ajax({
            url: '/profile/admin/experiences/deleteAll.php',
            type: 'post',
            data: {
                ids: ids
            },
            success: function( data ) {
                $('.del').addClass('hidden')
                alert("deleted success")
                $("#data").html(data);
            }
        });
    });

    $(document).ready(function(){
        $("#searchContact").keyup(function(){
          var key = $("#searchContact").val();
          $.ajax({
            url: '/profile/admin/contact/search.php',
            type: 'post',
            data: {
                key: key
            },
            success: function( data ) {
                $('.del').addClass('hidden')
                $("#data").html(data);
            }
            });
        })

        $("#searchSkills").keyup(function(){
          var key = $("#searchSkills").val();
          $.ajax({
            url: '/profile/admin/skills/search.php',
            type: 'post',
            data: {
                key: key
            },
            success: function( data ) {
                $('.del').addClass('hidden')
                $("#data").html(data);
            }
            });
        })

        $("#searchExperiences").keyup(function(){
          var key = $("#searchExperiences").val();
          $.ajax({
            url: '/profile/admin/experiences/search.php',
            type: 'post',
            data: {
                key: key
            },
            success: function( data ) {
                $('.del').addClass('hidden')
                $("#data").html(data);
            }
            });
        })
    })

});
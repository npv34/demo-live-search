$(document).ready(function () {
   $('#search-user').on('keyup', function () {
       let value = $(this).val();
       $.ajax({
           url: 'http://127.0.0.1:8000/users/search',
           type: 'GET',
           dataType: 'json',
           data: {keyword: value},
           success: function (result) {
               let html = '';
               $.each(result, function (index, item) {
                   html += '<tr class="user-'+item.id+'">';
                   html += '<td>';
                   html += index + 1;
                   html += '</td>';
                   html += '<td>';
                   html += item.name + 1;
                   html += '</td>';
                   html += '<td>';
                   html += item.email + 1;
                   html += '</td>';
                   html += '<td>';
                   html += '<button class="btn btn-danger delete-user" data-id="'+item.id+'">Delete</button>';
                   html += '</td>';
                   html += '</tr>'
               })

               $('#list-users').html(html)
           },
           errors: function () {

           }
       })
   });

    $('body').on('click','.delete-user', function () {
        if (confirm("ban chac chan muon xoa khong?")) {
            let userId = $(this).data('id');
            $.ajax({
                url: 'http://127.0.0.1:8000/users/' + userId + '/delete',
                type: 'GET',
                dataType: 'JSON',
                success: function (result) {
                    $('.user-' + userId).remove();
                }
            })
        }
    })
});

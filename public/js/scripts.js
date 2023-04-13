$(function() {
    /** Set link to parent comment */
    $(document).on('click', '.comment-reply', function(e) {
        let id = this.dataset.id,
            to_name = $(this).parents('div.row.comment[data-id="'+ id +'"]').find('.comment-user-name').first().text()

        $('#commentForm input[name="parent_id"]').val(id)
        $('#replyToName').addClass('d-block').show()
        $('#replyToName b').text(to_name)

        $('#commentMessage').focus()
    })

    /** Remove link to parent comment */
    $(document).on('click', '.comment-drop-parent', function(e) {
        $('#commentForm input[name="parent_id"]').val('')
        $('#replyToName').removeClass('d-block').hide()
        $('#replyToName b').text('')
    })
})

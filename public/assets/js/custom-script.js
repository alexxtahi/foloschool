// Envoyer un message à l'assistance
function sendMessage() {
    // Désactivation du bouton pendant l'Envoi
    $('#send-btn').prop('disabled', true);
    $('#send-btn').html('Envoi du message...');
    // Envoi de la requête
    $.ajax({
        type: "POST",
        url: "/send-message",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        dataType: 'json',
        data: {
            'customer_name': $('#customer_name').val(),
            'customer_email': $('#customer_email').val(),
            'customer_message': $('#customer_message').val(),
        },
        success: function (response) {
            $('#send-btn').prop('disabled', false);
            $('#send-btn').html('Message envoyé !');
        },
        error: function (response) {
            $('#send-btn').prop('disabled', false);
            $('#send-btn').html('Echec, Réessayer');
        },
    });
}

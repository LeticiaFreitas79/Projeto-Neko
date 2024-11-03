document.getElementById('barraPesquisa').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        window.location.href = '../view/busca.php';
    }
});

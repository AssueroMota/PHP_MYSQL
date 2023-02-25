function Excluir(e) {
    if (confirm("Tem Certeza que deseja excluir ?") == true) {
        var DelForm = document.query.selector('.DelForm');
        // DelForm.replace(/#/g, 'excluir.php');
        DelForm.submit();
    }
    else {
        var DelPro = document.querySelector('.DelPro');
        DelPro.innerHTML = `<form action="#" method="post" class="DelForm">
        <input type="hidden" name='id' value="<?php echo $Id; ?>">
        <button class="Delete" onclick="Excluir()">Excluir</button>`

        // e.preventDefault()

        window.location.href = "index.php";
    }
}
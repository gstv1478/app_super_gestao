<h2>Teste de fornecedores</h2>

{{-- Um breve comentário--}}

@php
    echo 'teste';
@endphp

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem varios fornecedores cadastrados </h3>
@else     
    <h3>Ainda não existem fornecdores cadastrados</h3>
@endif
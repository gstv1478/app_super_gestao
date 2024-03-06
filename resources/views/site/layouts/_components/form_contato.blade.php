{{$slot}}
<form action={{ route('site.contato') }} method="POST">
    @csrf
    <input type="text" name="Nome" placeholder="Nome" class="{{$classes}}">
    <br>
    <input type="text" name="Telefone" placeholder="Telefone" class="{{$classes}}">
    <br>
    <input type="text" name="email" placeholder="email" class="{{$classes}}">
    <br>
    <select name="motivo_contato" class="{{$classes}}">
        <option value="">Qual o motivo do contato?</option>
        <option value="0">Dúvida</option>
        <option value="1">Elogio</option>
        <option value="2">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{$classes}}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{$classes}}">ENVIAR</button>
</form>
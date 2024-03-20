<h1>Listagem de Contatos</h1>

@foreach ($contacts as $contact)

<div>
    <p>{{$contact->name}}</p>
</div>

@endforeach

<form action="/contato/store" method="POST">
    @method('POST')
    @csrf
    <button type="submit">Cadastrar Usuario</button>
</form>

<form action="/contato/update" method="POST">
    @method('PUT')
    @csrf
    <button type="submit">Atualizar Usuario</button>
</form>

<form action="/contato/delete/1" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar Usuario</button>
</form>
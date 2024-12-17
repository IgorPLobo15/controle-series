<x-layout title="Adicionar Série">
    <form action="/series/criar" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <button type="submit">Adicionar</button>
    </form>
</x-layout>
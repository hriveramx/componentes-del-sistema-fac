<div>

<h1>{{ $nombreSistema }}</h1>


<p>{{ $resultado }}</p>
<form action="">
    <label for="numero1">Ingrese numero 1</label>
    <input type="number" wire:model="numero1">
    <label for="numero2">Ingresar numero 2</label>
    <input type="number" wire:model="numero2" name="numero2" id="numero2">

    <button type="submit">calcular</button>
</form>

<button wire:click="multiplicar">Quiero multiplicar</button>
<button wire:click="sumar">Quiero sumar</button>
<button wire:click="restar">Quiero restar</button>

<hr>


</div>

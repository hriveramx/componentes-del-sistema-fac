<div>

<h1>{{ $nombreSistema }}</h1>
<hr>

<h2>Wire click</h2>
<p>{{ $resultado }}</p>
<form action="">
    <label for="numero1">Ingrese numero 1</label>
    <input type="number" wire:model="numero1">
    <label for="numero2">Ingresar numero 2</label>
    <input type="number" wire:model="numero2" name="numero2" id="numero20">

    <button type="submit">calcular</button>
</form>

<button wire:click="multiplicar">Quiero multiplicar</button>
<button wire:click="sumar">Quiero sumar</button>
<button wire:click="restar">Quiero restar</button>

<hr>

<h2>Wire change</h2>
<label>Ingrese cantidad</label>
<input name="cantidad" id="cantidad"  wire:model="cantidad" wire:change="calcularTotalIva" type="number">
<input type="number" wire:model="cantidadTotal">
<p>Resultado: {{ $cantidadTotal }}</p>

<hr>

<label for="">Subtotal</label>
<input type="number" name="subtotal" id="subtotal" wire:model="subtotal" wire:change="comisiones">
<label for="total">Total</label>
<input type="number" name="total" id="total" wire:model="total" wire:change="comisiones">
<br>

<label for="">Base de comisión</label>
 <select name="select" wire:model="TotalSubtotal" wire:change="comisiones">
    <option value="1">seleccionar opcion</option>
    <option value="2" selected>Subtotal</option>
    <option value="3" selected>Total</option>

  </select>

  <label for="">Comision porcentaje</label>
  <input type="number" name="porcentaje" id="porcentaje" wire:model="porcentaje" wire:change="comisiones">

  <label for="">comisión {{ $resultadoComisiones}} </label>
  <br>

<br>
<label for="">%Comisión Gmex</label>
<input type="number" name="porcentajeG" id="porcentajeG" wire:model="porcentajeGTotal" Wire:change="comisiones">
<label for="">Comision Gmex {{ $resultadoComisionesGM }}</label>
<br>

<label for="">%Comisión Gmex</label>
<input type="number" name="porcentajeG2" id="porcentajeG2" wire:model="porcentajeG2" Wire:change="comisiones">
<label for="">Comision Gmex {{ $resultadoComisionesGM2 }}</label>
<br>

<label for="">%Comisión Gmex</label>
<input type="number" name="porcentajeG3" id="porcentajeG3" wire:model="porcentajeG3" Wire:change="comisiones">
<label for="">Comision Gmex {{ $resultadoComisionesGM3 }}</label>


<hr>

        
@livewire('create-post')
@livewire('counter')


<hr>

<button type="button" class="btn btn-outline-warning" wire:model="">Warning</button>

<form wire:submit="save" >
  <input type="text" wire:model="pais">
  <button>Agregar</button>

</form>



  <ul class="list-group">
       @foreach ($paises as $index => $pais)
           <li class="list-group-item" wire:key="pais-{{$index}}">

            <span wire:mouseenter="changeActive('{{ $pais }}')">
              ({{ $index }})
            {{ $pais}}

          </span>
            <button type="button" class="btn btn-outline-danger" wire:click="delete({{$index}})">
              X
            </button>
          </li>       
        @endforeach

    
  </ul>

  {{$active}}



</div>

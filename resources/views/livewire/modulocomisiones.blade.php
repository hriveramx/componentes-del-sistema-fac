<div class="table-responsive">
    <table class="table table-light">
        <tr>
            <td class="">Esquema de comisiones</td>
            <td></td>
            <td>Comisión: </td>
            <td colspan="2"><input class="form-control" wire:model="comisionGeneral" type="text" placeholder="">@error('comisionGeneral') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            <td>Base comisión</td>
            <td>
                <select name="basecomision" id="basecomision" class="form-control" wire:model="basecomision">
                    <option value="total">Total</option>
                    <option value="subtotal">Subtotal</option>
                </select>
            </td>
            <td>Comisión</td>
            <td><input class="form-control" wire:model="baseComisionPorcentaje" type="text" placeholder="">@error('baseComisionPorcentaje') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        </tr>
        <tr>
            <td>% Comisión Gmex</td>
            <td>
                <input class="form-control" wire:model="pocentajeComisionGmex" type="text" placeholder="">
                @error('pocentajeComisionGmex') <p class="text-xs text-red">{{ $message }}</p> @enderror
            </td>

            @foreach(range(1, 10) as $index)
                <td rowspan="2" class="text-center" style="vertical-align: middle">
                    <select name="selectComisionBroker_{{ $index }}" id="selectComisionBroker_{{ $index }}" class="form-control" wire:model="brokers.{{ $index }}.selectCombo">
                        <option value="" @if($index > 1) disabled @endif></option>
                        <option value="{{ $index == 1 ? 'HB' : '0' }}" @if($index == 1) selected @endif>
                            {{ $index == 1 ? 'HB' : '' }}
                        </option>
                        <option value="MV">MV</option>
                        <option value="MT">MT</option>
                        <option value="PL">PL</option>
                    </select>
                </td>
                <td>
                    <select
                        class="form-control"
                        wire:model="brokers.{{ $index }}.porcentaje"
                        wire:change="calcularPorcentajeComisionGmex">
                        @foreach (range(0, 10) as $i)
                            <option value="{{ $i }}">{{ $i }}%</option>
                        @endforeach
                    </select>
                    @error('brokers.'.$index.'.porcentaje') <p class="text-xs text-red">{{ $message }}</p> @enderror
                </td>   
            @endforeach
        </tr>
        <tr>
            <td>Comisión Gmex</td>
            <td><input class="form-control" wire:model="cantidadComisionGmex" type="text" placeholder="">@error('cantidadComisionGmex') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>

            @foreach(range(1, 10) as $index)
                <td><input class="form-control" wire:model="cantidadBroker_{{ $index }}" type="text" placeholder="">@error('cantidadBroker_'.$index) <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            @endforeach
        </tr>
    </table>
</div>
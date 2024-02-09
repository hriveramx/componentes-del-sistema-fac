<div class="table-responsive">
    <table class="table table-light">
        <tr>
            <td class="">Esquema de comisiones</td>
            <td></td>
            <td>Comisión: </td>
            <td colspan="2"><input class="form-control" wire:model="comisionGeneral" type="text" placeholder="">@error('comisionGeneral') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            <td>Base comisión</td>
            <td>
                <select name="basecomision" id="basecomision" class="form-control" wire:model="basecomision" wire:change="CalcularCantidadComision">
                    <option value="total">Total</option>
                    <option value="subtotal">Subtotal</option>
                </select>
            </td>
            <td>Comisión</td>
            <td><input class="form-control" wire:model="baseComisionPorcentaje" type="text" placeholder="" wire:change="CalcularCantidadComision" >@error('baseComisionPorcentaje') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        </tr>
        <tr>
            <td>% Comisión Gmex</td>
            <td>
                <input class="form-control" wire:model="pocentajeComisionGmex" type="text" placeholder="">
                @error('pocentajeComisionGmex') <p class="text-xs text-red">{{ $message }}</p> @enderror
            </td>


            
                <td rowspan="2" class="text-center" style="vertical-align: middle">
                    <select name="selectComisionBroker_1" id="selectComisionBroker_1" class="form-control" wire:model="brokers_1_selectCombo">
                        <option value="HB">HB</option>
                        <option value="MV">MV</option>
                        <option value="MT">MT</option>
                        <option value="PL">PL</option>
                    </select>
                </td>
                <td>
                    <select
                        class="form-control"
                        wire:model="brokers_1_porcentaje"
                        wire:change="CalcularCantidadComision">

                            <option value="0">0%</option>
                            <option value="1">1%</option>
                            <option value="2">2%</option>
                            <option value="3">3%</option>
                            <option value="4">4%</option>
                            <option value="5">5%</option>
                        
                    </select>
                    
                </td>   

                <td rowspan="2" class="text-center" style="vertical-align: middle">
                    <select name="selectComisionBroker_1" id="selectComisionBroker_1" class="form-control" wire:model="brokers_1_selectCombo">
                        <option value="HB">HB</option>
                        <option value="MV">MV</option>
                        <option value="MT">MT</option>
                        <option value="PL">PL</option>
                    </select>
                </td>
                <td>
                    <select
                        class="form-control"
                        wire:model="brokers_2_porcentaje"
                        wire:change="CalcularCantidadComision">

                            <option value="0">0%</option>
                            <option value="1">1%</option>
                            <option value="2">2%</option>
                            <option value="3">3%</option>
                            <option value="4">4%</option>
                            <option value="5">5%</option>
                        
                    </select>
                    
                </td>   


                <td rowspan="2" class="text-center" style="vertical-align: middle">
                    <select name="selectComisionBroker_1" id="selectComisionBroker_1" class="form-control" wire:model="brokers_1_selectCombo">
                        <option value="HB">HB</option>
                        <option value="MV">MV</option>
                        <option value="MT">MT</option>
                        <option value="PL">PL</option>
                    </select>
                </td>
                <td>
                    <select
                        class="form-control"
                        wire:model="brokers_3_porcentaje"
                        wire:change="CalcularCantidadComision">

                            <option value="0">0%</option>
                            <option value="1">1%</option>
                            <option value="2">2%</option>
                            <option value="3">3%</option>
                            <option value="4">4%</option>
                            <option value="5">5%</option>
                        
                    </select>
                    
                </td> 
                
            
            
        </tr>
        <tr>
            <td>Comisión Gmex</td>
            <td><input class="form-control" wire:model="cantidadComisionGmex" type="text" placeholder="">@error('cantidadComisionGmex') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>

            
                <td><input class="form-control" wire:model="cantidadBroker_1" type="text" placeholder="">@error('cantidadBroker_1') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
                <td><input class="form-control" wire:model="cantidadBroker_2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
                <td><input class="form-control" wire:model="cantidadBroker_3" type="text" placeholder="">@error('cantidadBroker_3') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
 
                
        </tr>
    </table>
    <label for="">Total</label>
    <input type="number" wire:model="CantidadTotal">
    <label for="">Subtotal</label>
    <input type="number" wire:model="CantidadSubtotal">


</div>
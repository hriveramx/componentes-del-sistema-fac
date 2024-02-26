<div>

    @if (session()->has('mensajeSuccess'))
        <div class="alert alert-success">
            {{ session('mensajeSuccess') }}
        </div>
    @endif

    @if (session()->has('mensajeError'))
        <div class="alert alert-danger">
            {{ session('mensajeError') }}
        </div>
    @endif
    <!-- Informacion del cliente -->
    <form wire:submit.prevent="guardarModuloEB">
        <table class="table table-responsive mb-0">
            <tr>
                <td>Id Ticket:</td>
                <td><input class="form-control" name="ticketEB" wire:model="ticketEB"
                        wire:change="" type="text" placeholder="ingresar información"
                        required></td>
                </td>
                <td>Cliente:</td>
                <td>
                    <select name="cliente" id="cliente" class="form-control" wire:model.live="cliente"
                        wire:change="">
                        <option value="GMEX">GMEX</option>
                        <option value="HB">HB</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td><input class="form-control" name="fecha" type="date" wire:model="fecha"
                    wire:change="" required></td>
            </tr>

            <tr>
                <td>comentario</td>
                <td><textarea class="form-control" name="" id=""  maxlength="150"></textarea></td>
            </tr>
        </table>

        
        <div class="table-responsive">
            <table class="table table-light">
                <tr>
                    <td class="">Esquema de comisiones</td>
                    <td></td>
                    <td>Comisión: </td>
                    <td colspan="2"><input class="form-control" wire:model="comisionGeneral" type="text"
                            placeholder=""></td>
                    <td>Base comisión</td>
                    <td>
                        <select name="basecomision" id="basecomision" class="form-control"
                            wire:model="basecomision" wire:change="">
                            <option value="total">Total</option>
                            <option value="subtotal">Subtotal</option>
                        </select>
                    </td>
                    <td>Comisión</td>
                    <td><input class="form-control" wire:model="baseComisionPorcentaje" type="text" placeholder="" wire:change=""></td>
                </tr>
                <tr>
                    <td>% Comisión Gmex</td>
                    <td>
                        <input class="form-control" wire:model="pocentajeComisionGmex" type="text"
                            placeholder="">
                    </td>

                    <td rowspan="2" class="text-center" style="vertical-align: middle">
                        <select name="selectComisionBroker_1" id="selectComisionBroker_1" class="form-control"
                            wire:model="brokers_1_selectCombo" wire:change="" >
                            <option value="HB">HB</option>
                            <option value="MV">MV</option>
                            
                        </select>
                    </td>
                    <td>
                        <select class="form-control" wire:model="brokers_1_porcentaje" wire:change="">
                            <option value="0">0%</option>
                            <option value="1">1%</option>
                            <option value="2">2%</option>
                            <option value="3">3%</option>
                            <option value="4">4%</option>
                            <option value="5">5%</option>
                            <option value="6">6%</option>
                            <option value="7">7%</option>
                            <option value="8">8%</option>
                            <option value="9">9%</option>
                            <option value="10">10%</option>
                        </select>
                    </td>
                    <td rowspan="2" class="text-center" style="vertical-align: middle">
                        <select name="selectComisionBroker_2" id="selectComisionBroker_2" class="form-control"
                            wire:model="brokers_2_selectCombo" wire:change="">
                            <option value="HB">HB</option>
                            <option value="MV">MV</option>
                        </select>
                    </td>
                    <td>
                        <select class="form-control" wire:model="brokers_2_porcentaje" wire:change="">
                            <option value="0">0%</option>
                            <option value="1">1%</option>
                            <option value="2">2%</option>
                            <option value="3">3%</option>
                            <option value="4">4%</option>
                            <option value="5">5%</option>
                            <option value="6">6%</option>
                            <option value="7">7%</option>
                            <option value="8">8%</option>
                            <option value="9">9%</option>
                            <option value="10">10%</option>
                        </select>
                    </td>
                    <td rowspan="2" class="text-center" style="vertical-align: middle">
                        <select name="selectComisionBroker_3" id="selectComisionBroker_3" class="form-control"
                            wire:model="brokers_3_selectCombo" wire:change="">
                            <option value="HB">HB</option>
                            <option value="MV">MV</option>
                        </select>
                    </td>
                    <td>
                        <select class="form-control" wire:model="brokers_3_porcentaje" wire:change="">
                            <option value="0">0%</option>
                            <option value="1">1%</option>
                            <option value="2">2%</option>
                            <option value="3">3%</option>
                            <option value="4">4%</option>
                            <option value="5">5%</option>
                            <option value="6">6%</option>
                            <option value="7">7%</option>
                            <option value="8">8%</option>
                            <option value="9">9%</option>
                            <option value="10">10%</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Comisión Gmex</td>
                    <td><input class="form-control" wire:model="cantidadComisionGmex" type="text"
                            placeholder=""></td>

                    <td><input class="form-control" wire:model="cantidadBroker_1" type="text" placeholder="">
                    </td>
                    <td><input class="form-control" wire:model="cantidadBroker_2" type="text" placeholder="">
                    </td>
                    <td><input class="form-control" wire:model="cantidadBroker_3" type="text" placeholder="">
                    </td>

                </tr>
            </table>

        </div>

        <table class="table table-light">
            <tr>
                <td>Fecha Validacion</td>    
                <td>Validado Por</td>    
                <td>Saldo Disponible:</td> 
                <td>Observaciones y notas</td>
            </tr>           
            <tr>
                <td><input class="form-control" type="date"></td>    
                <td><input class="form-control" type="text"></td>    
                <td><input class="form-control" type="number"></td>  
                <td><textarea class="form-control" name="" id=""  maxlength="150"></textarea></td>
            </tr>     
        </table>
       
        <div class="table-responsive">
            <table class="table table-light" >
                <tr>
                    <td>No.</td>
                    <td>Clabe / Tarjeta / Cuenta</td>
                    <td>RFC</td>
                    <td>Razón Social</td>
                    <td>Banco Emiso</td>
                    <td>Referencia</td>
                    <td>Monto</td>
                    <td>Clave de Rastreo</td>
                    <td>Comprobante Deposito</td>
                    <td>Banco Emiso</td>
                    <td>Cuenta</td>
                    <td>Grupo</td>
                    <td>Fecha</td>
                </tr>
                <tr>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="file" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="date" placeholder=""></td>
                    
                </tr>
                <tr>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="file" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="date" placeholder=""></td>
                    
                </tr>
                <tr>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="file" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="number" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="" type="date" placeholder=""></td>
                    
            </table>
        </div>


       

        <div class="pb-3">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guadar</button>
        </div>
    </form>

</div>

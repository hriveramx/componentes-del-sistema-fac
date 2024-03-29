<div>

    @if(session()->has('mensajeSuccess'))
        <div class="alert alert-success">
            {{ session('mensajeSuccess') }}
        </div>
    @endif

    @if(session()->has('mensajeError'))
        <div class="alert alert-danger">
            {{ session('mensajeError') }}
        </div>
    @endif
<!-- Informacion del cliente -->
    <form wire:submit.prevent="guardarModuloEB">
        <table class="table mb-0">
            <tr>
                <td>Id Ticket:</td>
                <td><input class="form-control" name="ticketEB" wire:model="ticketEB" wire:change="actualizarDatosEmpresaEmisora" type="text" placeholder="ingresar información"  required></td>
                </td>
                <td>Cliente:</td>
                <td>
                    <select name="cliente" id="cliente" class="form-control" wire:model.live="cliente" wire:change="actualizarDatosCliente" >
                        
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->cliente }}</option>
                        @endforeach
                    </select>   
                </td>
            </tr>
        </table>

        <table class="table mb-0">
            <tr>
                <td>Empresa emisora</td>
                <td>
                    <select name="empresaEmisora" id="empresaEmisora" class="form-control" wire:model.live="empresaEmisora" wire:change="actualizarDatosEmpresaEmisora">
                        
                        @foreach ($empresasEmisoras as $empresa)
                            <option value="{{ $empresa->id }}">{{ $empresa->razonsocial }}</option>
                        @endforeach
                    </select>   
                </td>
                <td>RFC</td>
                <td><input class="form-control" name="rfc" wire:model="rfc" type="text" disabled placeholder="">
                </td>
            </tr>
            <tr>
                <td>Nivel</td>
                <td><input class="form-control" wire:model="nivel" type="text" placeholder="ingresar información" disabled required></td>
                <td>Grupo</td>
                <td><input class="form-control" name="grupo" wire:model="grupo" type="text" placeholder="ingresar información" disabled required></td>
                <td>Fecha:</td>
                <td><input class="form-control" name="fecha" type="date" wire:model="fecha" wire:change="CalcularCantidadComision" required></td>
            </tr>
        </table>
    <!--Equema de comisiones-->
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
                            wire:model="basecomision" wire:change="CalcularCantidadComision">
                            <option value="total">Total</option>
                            <option value="subtotal">Subtotal</option>
                        </select>
                    </td>
                    <td>Comisión</td>
                    <td><input class="form-control" wire:model="baseComisionPorcentaje" type="text" placeholder="" wire:change="CalcularCantidadComision"></td>
                </tr>
                <tr>
                    <td>% Comisión Gmex</td>
                    <td>
                        <input class="form-control" wire:model="pocentajeComisionGmex" type="text"
                            placeholder="">
                    </td>

                    <td rowspan="2" class="text-center" style="vertical-align: middle">
                        <select name="selectComisionBroker_1" id="selectComisionBroker_1" class="form-control"
                            wire:model="brokers_1_selectCombo" wire:change="llenadoTablaBrokers" >
                            @foreach ($brokers as $broker)
                            <option value="{{ $broker->id }}">{{ $broker->broker }}</option>
                              @endforeach
                            
                        </select>
                    </td>
                    <td>
                        <select class="form-control" wire:model="brokers_1_porcentaje" wire:change="CalcularCantidadComision">
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
                            wire:model="brokers_2_selectCombo" wire:change="llenadoTablaBrokers">
                            @foreach ($brokers as $broker)
                            <option value="{{ $broker->id }}">{{ $broker->broker }}</option>
                              @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="form-control" wire:model="brokers_2_porcentaje" wire:change="CalcularCantidadComision">
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
                            wire:model="brokers_3_selectCombo" wire:change="llenadoTablaBrokers">
                            @foreach ($brokers as $broker)
                            <option value="{{ $broker->id }}">{{ $broker->broker }}</option>
                              @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="form-control" wire:model="brokers_3_porcentaje" wire:change="CalcularCantidadComision">
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
                <!--Deposito-->
        <table class="table table-light">
            <tr>
                <td>Fecha Comprobante</td>
                <td>Banco Receptor</td>
                <td>Cta Receptora</td>
                <td>Monto Deposito:</td>
            </tr>
            <tr>
                <td><input class="form-control" wire:model="fechaComprobante" type="date" readonly placeholder=""></td>
                <td><select name="bancoReceptor" id="bancoReceptor" class="form-control" wire:model.live="bancoReceptor" wire:change="actualizarDatosBanco">
                        
                    @foreach ($bancos as $banco)
                        <option value="{{ $banco->id }}">{{ $banco->abreviado}}</option>
                    @endforeach
                </select> </td>
                <td><input class="form-control" wire:model.live="cuentaReceptora" type="number" required placeholder=""></td>
                <td><input class="form-control" name="montoDeposito" wire:model="montoDeposito" wire:change="CalcularCantidadComision" type="text" required placeholder="ingresar información"></td>
            </tr>
                

            <tr>
                <td>Comprobante Deposito</td>
                <td><input class="form-control" name="fechaComprobante" wire:model="fechaComprobante" type="file" placeholder=""></td>
            </tr>

            <tr>
                <td>Validación Deposito</td>
                <td><input class="form-control" name="validacionDeposito" wire:model="validacionDeposito" type="file" placeholder=""></td>
                <td>
                    <select name="validacion" id="validacion" class="form-control"
                        wire:model="validacion">
                        <option value="validado">Validado</option>
                        <option value="noValidado">No Validado</option>
                    </select>
                </td>
            </tr>
        </table>

        @include('livewire.EB.listaeb')
        @include('livewire.EB.listasaldosclientes')
        @include('livewire.EB.listasaldosbrokers')
        @include('livewire.EB.listasaldoscuentas')


        <div class="pb-3">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guadar</button>
        </div>

        <a href="{{ route('controlEB')}}">ControlEB</a><br>
        <a href="{{ route('saldosclientes')}}">Saldos Clientes</a><br>
        <a href="{{ route('saldoscuentas')}}">Saldos Cuentas</a><br>
        <a href="{{ route('saldosbrokers')}}">Saldos Brokers</a><br>

        

    </form> 

</div>

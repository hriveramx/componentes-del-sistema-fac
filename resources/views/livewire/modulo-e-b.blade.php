<div>

    <form wire:submit.prevent="guardar">
        <table class="table mb-0">
            <tr>
                <td>Id Ticket:</td>
                <td><input class="form-control" readonly value="EB" type="text" placeholder=""></td>
                </td>
                <td>Cliente:</td>
                <td><input class="form-control" readonly wire:model="cliente" type="text" placeholder=""></td>
            </tr>
        </table>

        <div>
            <table class="table mb-0">
                <tr>
                    <td>Empresa emisora</td>
                    <td>
                        <select name="empresaEmisora" id="empresaEmisora" class="form-control"
                            wire:model="empresaEmisora" >
                            <option value="1">TELEMARKETING & BRANDING S.A. DE C.V.</option>
                            <option value="2">FREEMAN AND SONS SAÍ DE CV</option>
                            
                        </select>
                    </td>
                    <td>RFC</td>
                    <td><input class="form-control" readonly wire:model="rfc_emisora" type="text" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Nivel</td>
                    <td><input class="form-control" readonly wire:model="nivel" type="text" placeholder=""></td>
                    <td>Grupo</td>
                    <td><input class="form-control" readonly wire:model="grupo" type="text" placeholder=""></td>
                    <td>Fecha:</td>
                    <td><input class="form-control" type="date" wire:model="fechaEmisora"
                            ></td>
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
                                wire:model="basecomision">
                                <option value="total">Total</option>
                                <option value="subtotal">Subtotal</option>
                            </select>
                        </td>
                        <td>Comisión</td>
                        <td><input class="form-control" wire:model="baseComisionPorcentaje" type="text"
                                placeholder=""></td>
                    </tr>
                    <tr>
                        <td>% Comisión Gmex</td>
                        <td>
                            <input class="form-control" wire:model="pocentajeComisionGmex" type="text"
                                placeholder="">
                        </td>

                        <td rowspan="2" class="text-center" style="vertical-align: middle">
                            <select name="selectComisionBroker_1" id="selectComisionBroker_1" class="form-control"
                                wire:model="brokers_1_selectCombo">
                                <option value="1">Broker 1</option>
                                <option value="2">Broker 2</option>
                                <option value="3">Broker 3</option>
                                <option value="4">Broker 4</option>
                                
                            </select>
                        </td>
                        <td>
                            <select class="form-control" wire:model="brokers_1_porcentaje"
                 >
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
                                wire:model="brokers_2_selectCombo">
                                <option value="1">Broker 1</option>
                                <option value="2">Broker 2</option>
                                <option value="3">Broker 3</option>
                                <option value="4">Broker 4</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" wire:model="brokers_2_porcentaje"
                                >
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
                                wire:model="brokers_3_selectCombo">
                                <option value="" disabled></option>
                                <option value="1">Broker 1</option>
                                <option value="2">Broker 2</option>
                                <option value="3">Broker 3</option>
                                <option value="4">Broker 4</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" wire:model="brokers_3_porcentaje"
                                >
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

        </div>

        <div>
            <table class="table table-light">
                <tr>
                    <td>Fecha Comprobante</td>
                    <td>Banco Receptor</td>
                    <td>Cta Receptora</td>
                    <td>Monto Deposito:</td>
                </tr>
                <tr>
                    <td><input class="form-control" wire:model="fechaComprobante" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="bancoRceptor" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="cuentaReceptora" type="text" placeholder=""></td>
                    <td><input class="form-control" wire:model="montoDeposito" type="text" placeholder=""></td>
                </tr>
                    

                <tr>
                    <td>Comprobante Deposito</td>
                    <td><input class="form-control" wire:model="fechaComprobante" type="file" placeholder=""></td>
                </tr>

                <tr>
                    <td>Validación Deposito</td>
                    <td><input class="form-control" wire:model="fechaComprobante" type="file" placeholder=""></td>
                    <td>
                        <select name="validacion" id="validacion" class="form-control"
                            wire:model="validacion">
                            <option value="validado">Validado</option>
                            <option value="noValidado">No Validado</option>
                        </select>
                    </td>
                </tr>



            </table>

        </div>

        <div class="pb-3">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guadar</button>
        </div>
    </form>

</div>

@extends('templates.master')
@section('css')
@endsection
@section('centro')
    <div class="row">
        <div class="col">
            <h2>Minha rede</h2>
            <form action="/cadRede" method="post">
                <input type="text" name="hostname" class="form-control" placeholder="Hostname"/>
                <input type="text" name="ip" class="form-control" placeholder="IP"/>
                <input type="text" name="mac" class="form-control" placeholder="MAC"/>
                <label for="so">Sistema Operacional: </label>
                <select name="so" class="form-control">
                    <option value="Windows XP">Windows XP</option>
                    <option value="Windows 7">Windows 7</option>
                    <option value="Windows 8">Windows 8</option>
                    <option value="Windows 10">Windows 10</option>
                    <option value="Windows Server 2003">Windows Server 2003</option>
                    <option value="Windows Server 2008">Windows Server 2008</option>
                    <option value="Windows Server 2012">Windows Server 2012</option>
                    <option value="Windows Server 2016">Windows Server 2016</option>
                    <option value="Ubuntu 12">Ubuntu 12</option>
                    <option value="Ubuntu 14">Ubuntu 14</option>
                    <option value="Ubuntu 16">Ubuntu 16</option>
                    <option value="Ubuntu 17">Ubuntu 17</option>
                    <option value="Debian 8">Debian 9</option>
                    <option value="Debian 9">Debian 8</option>
                    <option value="CentOS 6">CentOS 6</option>
                    <option value="CentOS 7">CentOS 7</option>
                    <option value="ProxMox">ProxMox</option>
                    <option value="VMWare">VMWare</option>
                    <option value="PFSense">PFSense</option>
                    <option value="Windows (outro)">Windows (Outro)</option>
                    <option value="Linux (outro)">Linux (Outro)</option>
                </select>
                <input type="text" name="setor" class="form-control" placeholder="Setor"/>
                <input type="text" name="usuario" class="form-control" placeholder="Usuário"/>
                <input type="text" name="ram" class="form-control" placeholder="RAM"/>
                <input type="text" name="HD" class="form-control" placeholder="HD"/>
                <label for="tipo">Tipo: </label>
                <select name="tipo" class="form-control">
                    <option value="Desktop">Desktop</option>
                    <option value="Servidor">Servidor</option>
                    <option value="Notebook">Notebook</option>
                    <option value="Workstation">Workstation</option>
                    <option value="Smartphone">Smartphone</option>
                </select>
                <label for="estado">Estado: </label>
                <select name="estado" class="form-control">
                    <option value="Disponível">Disponível</option>
                    <option value="Em uso">Em uso</option>
                    <option value="Em manutenção">Em manutenção</option>
                    <option value="Em testes">Em testes</option>
                    <option value="Furtado">Furtado</option>
                </select>
                <button class="btn btn-secondary-outline">Salvar</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped tabela">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hostname</th>
                            <th scope="col">IP</th>
                            <th scope="col">MAC</th>
                            <th scope="col">SO</th>
                            <th scope="col">Setor</th>
                            <th scope="col">Usuário</th>
                            <th scope="col">RAM</th>
                            <th scope="col">HD</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rede as $host)
                            <tr>
                                <th scope="row">{{$host->id}}</th>
                                <td>{{$host->hostname}}</td>
                                <td>{{$host->ip}}</td>
                                <td>{{$host->mac}}</td>
                                <td>{{$host->so}}</td>
                                <td>{{$host->setor}}</td>
                                <td>{{$host->usuario}}</td>
                                <td>{{$host->ram}}</td>
                                <td>{{$host->hd}}</td>
                                <td>{{$host->tipo}}</td>
                                <td>{{$host->estado}}</td>
                                <td class="text-center">
                                    <form action="/delRede" method="post">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="id" value="{{$midia->id}}">
                                        <button type="submit"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
@section('js')
@endsection
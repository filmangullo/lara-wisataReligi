@extends('layouts.dashboardLayout')

@section('subhead')
<h2>PERISTIWA ISLAM BARU</h2>    
@endsection

@section('isi')
    <div class="col-md-12">
            <form action="{{ route('kalender.store') }}" method="post" role="form" class="contactForm">
               <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Bulan</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <select name="bulan_id" class="form-control">
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">July</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Tanggal</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <select name="tanggal_id" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <label>Nama Peritiwa</label>
                        </div>
                        <div class="col-lg-10 col-md-10">
                                <textarea name="nama_peristiwa" rows="5" data-rule="required" data-msg="Please write something for us" class="form-control" placeholder=""></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <button class="btn btn-theme btn-medium margintop10" type="submit">Add</button>
                        </div>
                    </div>
                </div>
                    {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection
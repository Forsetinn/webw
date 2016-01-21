@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 15%">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form>
                      <div class="form-group">
                        <label>Skrá númeraplötu</label>
                        <input class="form-control" type="text" name="LicencePlate">
                      </div>
                      <div class="form-group">
                        <label>Skrá Bílastatus</label>
                        <select class="form-control" name="Status">
                          <option style="disabled">Velja Status</option>
                          <option value="í biðröð">Í Biðröð</option>
                          <option value="Í Viðgerð">Í Viðgerð</option>
                          <option value="Tilbúinn">Tilbúinn</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Skrá Status</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  document.getElementById("transp").className = "navbar navbar-default navbar-fixed-top";
</script>
@endsection

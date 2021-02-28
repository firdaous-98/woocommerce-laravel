<div class="modal modal-open" id="upload" tabindex="-1" role="contentinfo" aria-labelledby="add_package" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">insérer votre fichier</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
<form action="{{ url('/dashboard/products/upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
<div class="form-group">
        <div class="col-md-6">
            <input class="form-control-file" type="file" name="file" class="form-control " accept=".xlsx,.xls,.csv">
        </div>
        <div class="col-md-6 mt-1">
            <button type="submit" class="btn btn-success">Upload</button>
        </div>
    </div>

    </div>
</form>
            </div>
        </div>
    </div>
</div>
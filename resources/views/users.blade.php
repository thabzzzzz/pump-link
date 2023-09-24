<form  method="get" action="{{ route('add_to_cart') }}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="frmName">Name</label>
          <input type="text" id="frmName" name="frmName" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="frmCompany">Company/Institution</label>
          <input type="text" id="frmCompany" name="frmCompany" class="form-control" required="">
        </div>


       <button type="submit">Submit</button>
      </form>

      
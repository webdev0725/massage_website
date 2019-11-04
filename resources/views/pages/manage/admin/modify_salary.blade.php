<fieldset>
    <h2 class="page_title">Edit Bouns Information</h2>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            
            <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">    
                    <label class="pull-left" for="eventName1" >Staff Name :</label>
                    <input type="text" class="form-control service_choose" placeholder="Eleanor" name="staff_name" id="mstaff_name" value="" disabled> 
                    <input type="hidden"  name="staff_id" id="mstaff_id" value=""> 
                </div>
                <div class="form-group">    
                    <label class="pull-left" for="eventName1" >Input the Amount of Money :</label>
                    <input type="number" class="form-control service_choose" placeholder="50$" name="bonus" required> 
                </div>
                <div class="form-group">    
                    <label class="pull-left" for="eventName1" >Input Information more detail:</label>
                    <input type="text" class="form-control service_choose" placeholder="more over 150h per month" name="note" required> 
                    <input type="hidden" name="admin_flag" value="salary_manage">
                    <input type="hidden" name="salary_type" value="modify_salary">
                </div> 
                <div class="form-group">
                    <div class="form-holder">
                        <input class="btn btn-primary pull-right cashier_submit modify_salary_btn"  type="submit" name="add_salary" value="Submit">
                    </div>
                </div>
            </form>                                                                    
        </div>
        <div class="col-md-2"></div>
    </div>
</fieldset>
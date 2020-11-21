@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Create Role</h4>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area">
                        <form id="basic-form" method="POST" data-reset="true" class="ajax_form form-horizontal" enctype="multipart/form-data" novalidate="">
                            <input type="hidden" name="_token" value="IYll28PJ3IqqnWyknaRbzdlWodV3ZHKZ7WkHtAq3">
                            <div class="form-body offset-2">
                                <div class="form-group row" id="comm_num">
                                    <label for="name" class="col-md-3 col-form-label">
                                        المنصب
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="colgit initgit init-md-6">
                                        <input type="text" class="form-control" required="" name="name" placeholder="المنصب">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                
                                <h2>الصلاحيات</h2>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable">
                                        <thead>
                                        <tr>
                                            <th>الخدمة</th>
                                            <th>الانشاء</th>
                                            <th>التعديل</th>
                                            <th>الحذف</th>
                                            <th>القراءة</th>
                                        </tr>
                                        <tr>
                                            <td>الدول</td>
                                                                                                <td>
                                                    <input type="checkbox" name="permission_id[]" value="1">
                                                </td>
                                                                                                <td>
                                                    <input type="checkbox" name="permission_id[]" value="2">
                                                </td>
                                                                                                <td>
                                                    <input type="checkbox" name="permission_id[]" value="3">
                                                </td>
                                                                                                <td>
                                                    <input type="checkbox" name="permission_id[]" value="4">
                                                </td>
                                                                                        </tr>
                                        <tr>
                                            <td>المستخدمين</td>
                                                                                                <td>
                                                    <input type="checkbox" name="permission_id[]" value="5">
                                                </td>
                                                                                                <td>
                                                    <input type="checkbox" name="permission_id[]" value="6">
                                                </td>
                                                                                                <td>
                                                    <input type="checkbox" name="permission_id[]" value="7">
                                                </td>
                                                                                                <td>
                                                    <input type="checkbox" name="permission_id[]" value="8">
                                                </td>
                                                                                        </tr>
                                        <tr>
                                            <td>المدراء</td>
                                                                                                <td>
                                                    <input type="checkbox" name="permission_id[]" value="9">
                                                </td>
                                                                                                <td>
                                                    <input type="checkbox" name="permission_id[]" value="10">
                                                </td>
                                                                                                <td>
                                                    <input type="checkbox" name="permission_id[]" value="11">
                                                </td>
                                                                                                <td>
                                                    <input type="checkbox" name="permission_id[]" value="12">
                                                </td>
                                                                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <button type="submit" class="submit_btn btn btn-primary">
                                    <i class="fa fa-spinner fa-spin" style="display: none;"></i>
                                    Save                                    </button>
                                <a href="https://adhmn.moumenalisawe.website/admin/roles" id="cancel_btn" class="btn btn-secondary">
                                    Cancel                                    </a>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

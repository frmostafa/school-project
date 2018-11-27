@extends('layouts.admin')

@section('content')

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                مشخصات دانش آموزان

                            </header>
                            <table class="table table-striped border-top" id="sample_1">
                                <thead>
                                <tr>
                                    <th style="width: 8px;">
                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
                                    </th>
                                    <th>نام کاربری</th>
                                    <th class="hidden-phone">ایمیل</th>
                                    {{--<th class="hidden-phone">Points</th>--}}
                                    {{--<th class="hidden-phone">تاریخ عضویت</th>--}}
                                    <th class="hidden-phone">پایه تحصیلی</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd gradeX">
                                    <td>
                                        <input type="checkbox" class="checkboxes" value="1"/></td>
                                    <td>Jhone doe</td>
                                    <td class="hidden-phone"><a href="mailto:jhone-doe@gmail.com">jhone-doe@gmail.com</a>
                                    </td>

                                    {{--<td class="center hidden-phone">02.03.2013</td>--}}
                                    <td class="center hidden-phone">اول ابتدایی</td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <input type="checkbox" class="checkboxes" value="1"/></td>
                                    <td>gada</td>
                                    <td class="hidden-phone"><a href="mailto:gada-lal@gmail.com">gada-lal@gmail.com</a></td>

                                    {{--<td class="center hidden-phone">08.03.2013</td>--}}
                                    <td class="center hidden-phone">پنجم بتدایی</td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <input type="checkbox" class="checkboxes" value="1"/></td>
                                    <td>soa bal</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@yahoo.com">soa bal@yahoo.com</a></td>
                                    {{--<td class="center hidden-phone">1.12.2013</td>--}}
                                    <td class="center hidden-phone">سوم ابتدایی</td>
                                </tr>



                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->



@endsection()
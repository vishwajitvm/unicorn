@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Dealer" ;
        $metakeywordname = "UnicornEqupment Main Machine" ;
        $metakeywordContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;

        //meta descriptions
       $metaDescriptionName = "Unicorn Equpment Mainmahine Description" ;
       $metaDescriptionContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;
@endphp
<!--META DATA END-->

    <!--banner section start-->
    <section class="innerpagebanner d-flex align-items-center">

        <div class="container">
            <div class="mainheadertitle text-center">
                <h1>Search Here </h1>
                <div class="input-group">
                    <input type="search" id="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" style="background-color: white;" />
                    <button type="button" class="btn "><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>

    </section>

    <!--banner section end here-->
    <!-- serach data section start here -->

    <section class="serachdatatable">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table my-5" id="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Dealer company</th>
                                <th scope="col">State</th>
                                <th scope="col">Pin Code</th>

                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($data as $key=>$item)
                            <tr style="display: none" class="tbldata">
                                <th scope="row">{{$key+1}}</th>
                                <td> {{ $item->dealercompany_name }} </td>
                                <td> {{ $item->dealerstate }} </td>
                                <td> {{ $item->dealerpincode }} </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
    </div>
            </div>
        </div>
    </section>

    <script>
        var $rows = $('#table tr');
        $('#search').keyup(function() {
            
            var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
                reg = RegExp(val, 'i'),
                text;
            
            $rows.show().filter(function() {
                text = $(this).text().replace(/\s+/g, ' ');
                return !reg.test(text);
            }).hide();
        });
    </script>


    <script>
            $('#search').keyup(function()
        {
            if(!$(this).val() ) {
                location.reload();
            }
        });

    </script>



@endsection
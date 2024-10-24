<!DOCTYPE html>
<html>

<head>
    @include('backend.dashboard.component.header')

</head>

<body>
    <div id="wrapper">

        @include('backend.dashboard.component.siderbar')

        <div id="page-wrapper" class="gray-bg">
            @include('backend.dashboard.component.nav')
            @include($template)
            

            @include('backend.dashboard.component.footer')
        </div>

    </div>

    @include('backend.dashboard.component.script')

</body>

</html>

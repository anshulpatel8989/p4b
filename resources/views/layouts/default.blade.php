
@include('includes.header')


<!--    Top menu     --> 
@include('includes.topmenu')
<!--    Side Menu     --> 
<div id="layoutSidenav">
    @include('includes.sidemenu')

    <div id="layoutSidenav_content">
        <main>
            @yield('content')
            <!--    Footer Menu   -->
@include('includes.footermenu')
        </main>
    </div>
</div>



<!--    Footer JS links Menu   -->
@include('includes.footer')


</div>
</body>
</html>

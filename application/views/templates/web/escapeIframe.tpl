<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <div style="display:none" id="installUrl" data-url="{$permission_url}"></div>

        <script type="text/javascript">
            var installUrl = document.getElementById("installUrl").getAttribute("data-url");
            window.top.location.href = installUrl;
        </script>
    </body>
</html>
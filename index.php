<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <button popovertarget="popover1"> Open Popover1 </button>

    <div id="popover1" popover>
        <p>I am a popover with more information. Hit <kbd>esc</kbd> or click away to close me.</p>
    </div>
    <br>
    <br>

    <button popovertarget="popover2">Open Popover2</button>
    <div id="popover2" popover=manual>
        <div>I am a manual popover with more information. Hit the close button or toggle to close me.</div>

        <div><button popovertarget="popover2" popovertargetaction="hide">
                ❌ Close
                <!-- <span></span> -->
            </button></div>
    </div>
</body>

</html>
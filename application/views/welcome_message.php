		<link href="assets/metro/css/schemes/darcula.css" id="color-scheme" rel="stylesheet">

<body onLoad="checkCookie();runToast('class');">
    <div class="container" style="margin-bottom: 200px;">

<!--- Main Menu -->    
<div class="app-bar fixed-top darcula" data-role="appbar">
</div>
    <div class="container" style="margin-bottom: 200px;">
        <div class="pos-fixed z-top p-4 bg-light" style="top: 10px; right: 10px;">
            <button class="button" style="background-color: #585b5d" onclick="changeSchemeTo('darcula.css')">darcula</button>
            <button class="button" style="background-color: #AF0015" onclick="changeSchemeTo('red-alert.css')">red-alert</button>
            <button class="button" style="background-color: #690012" onclick="changeSchemeTo('red-dark.css')">red-dark</button>
            <button class="button" style="background-color: #0CA9F2" onclick="changeSchemeTo('sky-net.css')">sky-net</button>
        </div>
        <h1>Metro 4 Schemes <small id="scheme-name">darcula.css</small></h1>
        <hr class="thin">

        <h2 id="inputs">Inputs</h2>
        <div class="example">
            <form data-role="validator" action="javascript:">
                <input type="text" data-role="input" data-prepend="Your name" placeholder="Input your name..." data-validate="minlength=6">
                <span class="invalid_feedback">This is invalid feedback</span>
                <input type="file" data-role="file" placeholder="Choose a file..." class="mt-2">

                <select data-role="select" class="mt-2">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                </select>

                <textarea data-role="textarea" class="mt-2"></textarea>

                <div class="mt-2">
                    <input type="checkbox" data-role="checkbox" data-caption="Checkbox">
                    <input type="checkbox" data-role="checkbox" data-caption="Checkbox" checked>
                    <input type="checkbox" data-role="checkbox" data-caption="Indeterminate" data-indeterminate="true">
                    <input type="checkbox" data-role="checkbox" data-caption="Disabled" disabled>
                    <input type="checkbox" data-role="checkbox" data-caption="Disabled checked" disabled checked>
                </div>

                <div class="mt-2">
                    <input name="r1" type="radio" data-role="radio" data-caption="Radio 1" checked="checked">
                    <input name="r1" type="radio" data-role="radio" data-caption="Radio 2">
                    <input name="r2" type="radio" data-role="radio" data-caption="Disabled" disabled>
                    <input name="r2" type="radio" data-role="radio" data-caption="Disabled checked" checked disabled>
                </div>

                <div class="mt-2">
                    <input type="checkbox" data-role="switch" data-caption="Switch">
                    <input type="checkbox" data-role="switch" data-caption="Switch" checked>
                    <input type="checkbox" data-role="switch" data-caption="Disabled" disabled>
                    <input type="checkbox" data-role="switch" data-caption="Disabled checked" checked disabled>
                </div>

                <div class="mt-2">
                    <input type="button" value="Button" class="button">
                    <input type="reset" value="Reset" class="button">
                    <input type="submit" value="Submit" class="button">
                </div>
            </form>
        </div>

        <h2 id="button">Button</h2>
        <div class="example">
            <div>
                <button class="button">Default button</button>
                <div class="toolbar">
                    <button class="tool-button"><span class="mif-floppy-disk"></span></button>
                    <button class="tool-button"><img src="../../images/checkmark.png"></button>
                    <button class="tool-button text-button">Open</button>
                </div>
                <div class="info-button">
                    <a class="button" href="#"><span class="mif-star-full"></span> Star</a>
                    <a class="info" href="#">5,553</a>
                </div>
                <button class="image-button">
                    <span class="mif-share icon"></span>
                    <span class="caption">Share it</span>
                </button>
                <div class="split-button">
                    <button class="button">Reply</button>
                    <button class="split dropdown-toggle"></button>
                    <ul class="d-menu" data-role="dropdown">
                        <li><a href="#">Reply All</a></li>
                        <li><a href="#">Forward</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Delete</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-4">
                <button class="command-button">
                    <span class="mif-share icon"></span>
                    <span class="caption">
                        Yes, share and connect
                        <small>Use this option for home or work</small>
                    </span>
                </button>
                <button class="shortcut">
                    <span class="tag">10</span>
                    <span class="caption">Rocket</span>
                    <span class="mif-rocket icon"></span>
                </button>
            </div>
        </div>

        <h2 id="breadcrumbs">Breadcrumbs</h2>
        <div class="example">
            <ul class="breadcrumbs">
                <li class="page-item"><a href="#" class="page-link">Home</a></li>
                <li class="page-item"><a href="#" class="page-link">Products</a></li>
                <li class="page-item"><a href="#" class="page-link">Downloads</a></li>
                <li class="page-item"><a href="#" class="page-link">Windows 10</a></li>
            </ul>
        </div>

        <h2 id="pagination">Pagination</h2>
        <div class="example">
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item no-link"><a class="page-link">...</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item"><a class="page-link" href="#">8</a></li>
                <li class="page-item"><a class="page-link" href="#">9</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
            <ul class="pagination no-gap">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item no-link"><a class="page-link">...</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item"><a class="page-link" href="#">8</a></li>
                <li class="page-item"><a class="page-link" href="#">9</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>

        <h2 id="accordion">Accordion</h2>
        <div class="example">
            <div data-role="accordion">
                <div class="frame">
                    <div class="heading">Header 1</div>
                    <div class="content">
                        <div class="p-2">Cur luba manducare? Pol, a bene ionicis tormento. Warm, sichuan-style pudding is best garnished with aged BBQ sauce.</div>
                    </div>
                </div>
                <div class="frame active">
                    <div class="heading">Header 2</div>
                    <div class="content">
                        <div class="p-2">Wildly open a starship. Belay, ye small wench- set sails for hunger! Springy, juicy pudding is best blended with whole ice water.</div>
                    </div>
                </div>
                <div class="frame">
                    <div class="heading">Header 3</div>
                    <div class="content">
                        <div class="p-2">Bitter turkey can be made tasty by brushing with sweet chili sauce. Popcorn combines greatly with grey peanut butter.</div>
                    </div>
                </div>
            </div>
        </div>

        <h2 id="appbar">App bar</h2>
        <div class="example">
            <div class="pos-relative z-dropdown" data-role="appbar">
                <a href="" class="brand no-hover text-bold">Metro 4</a>
                <ul class="app-bar-menu">
                    <li><a href="#">Home</a></li>
                    <li>
                        <a href="#" class="dropdown-toggle">Products</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="#">Windows 10</a></li>
                            <li><a href="#">Office 365</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Skype</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
            <div class="pos-relative app-bar-expand-md z-dropdown mt-2" data-role="appbar">
                <a href="" class="brand no-hover text-bold">Metro 4</a>
                <ul class="app-bar-menu">
                    <li><a href="#">Home</a></li>
                    <li>
                        <a href="#" class="dropdown-toggle">Products</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="#">Windows 10</a></li>
                            <li><a href="#">Office 365</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Skype</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
        </div>

        <h2 id="calendar">Calendar</h2>
        <div class="example">
            <div class="row">
                <div class="cell">
                    <div data-role="calendar" class="mx-auto"></div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="cell">
                    <div data-role="calendar" class="calendar-wide-fs mx-auto"></div>
                </div>
            </div>
        </div>

        <h2 id="calendar-picker">Pickers</h2>
        <div class="example">
            <div class="row">
                <div class="cell-md-4">
                    <input data-role="calendarpicker"  data-calendar-button-icon="<span class='mif-calendar'></span>">
                </div>
                <div class="cell-md-4">
                    <input data-role="datepicker" data-distance="1" data-ok-button-icon="<span class='mif-checkmark'></span>" data-cancel-button-icon="<span class='mif-cross'></span>">
                </div>
                <div class="cell-md-4">
                    <input data-role="timepicker" data-distance="1" data-ok-button-icon="<span class='mif-checkmark'></span>" data-cancel-button-icon="<span class='mif-cross'></span>">
                </div>
            </div>
        </div>

        <h2 id="countdown">Countdown</h2>
        <div class="example">
            <div data-role="countdown" data-hours="90"></div>
        </div>

        <h2 id="dialog">Dialog</h2>
        <div data-role="dialog" id="dialog1">
            <div class="dialog-title">Use Windows location service?</div>
            <div class="dialog-content">
                Bassus abactors ducunt ad triticum.
                A fraternal form of manifestation is the bliss.
            </div>
            <div class="dialog-actions">
                <button class="button js-dialog-close">Agree</button>
                <button class="flat-button js-dialog-close fg-light">Disagree</button>
            </div>
        </div>
        <div class="example text-center">
            <button class="button" onclick="Metro.dialog.open($('#dialog1'))">Open dialog</button>
        </div>

        <h2 id="hints">Hints</h2>
        <div class="example">
            <div class="example d-flex flex-justify-between">
                <button class="button" data-role="hint" data-hint-position="right" data-hint-text="This is a hinted button">Hint Right</button>
                <button class="button" data-role="hint" data-hint-position="top" data-hint-text="This is a hinted button">Hint Top</button>
                <button class="button" data-role="hint" data-hint-position="bottom" data-hint-text="This is a hinted button">Hint Bottom</button>
                <button class="button" data-role="hint" data-hint-position="left" data-hint-text="This is a hinted button">Hint Left</button>
            </div>
        </div>

        <h2 id="keypad">Keypad</h2>
        <div class="example">
            <input type="text" data-role="keypad">
        </div>

        <h2 id="listview">Listview</h2>
        <div class="example">
            <div class="p-4 d-flex flex-justify-between border bd-default bg-scheme-secondary">
                <input type="checkbox" data-role="switch" data-caption="Selectable" title="" onclick="$('#listview-1').attr('data-selectable', $(this).is(':checked'))">
                <input type="radio" name="r3" value="list" data-role="radio" data-caption="List" checked title="">
                <input type="radio" name="r3" value="table" data-role="radio" data-caption="Table" title="">
                <input type="radio" name="r3" value="content" data-role="radio" data-caption="Content" title="">
                <input type="radio" name="r3" value="tiles" data-role="radio" data-caption="Tiles" title="">
                <input type="radio" name="r3" value="icons" data-role="radio" data-caption="Icons" title="">
                <input type="radio" name="r3" value="icons-medium" data-role="radio" data-caption="Medium icons" title="">
                <input type="radio" name="r3" value="icons-large" data-role="radio" data-caption="Large icons" title="">
            </div>
            <div class="border bd-default no-border-top">
                <ul class="p-4" data-role="listview" data-selectable="false" data-view="list" id="listview-1" data-select-node="true" data-structure='{"date": true, "name": true}'>
                    <li data-icon="<span class='mif-folder fg-orange'>" data-caption="Video" data-content="<div class='mt-1' data-role='progress' data-value='35' data-small='true'>" data-date="12/21/2017" data-name="Video library"></li>
                    <li data-icon="<span class='mif-folder fg-cyan'>" data-caption="Images" data-content="<div class='mt-1' data-role='progress' data-value='78' data-small='true'>" data-date="12/21/2017" data-name="My images"></li>
                    <li data-icon="<span class='mif-folder-download fg-green'>" data-caption="Downloads" data-content="<div class='mt-1' data-role='progress' data-value='85' data-small='true'>" data-date="12/21/2017" data-name="System folder"></li>
                    <li data-icon="<span class='mif-folder'>" data-caption="Desktop" data-content="<div class='mt-1' data-role='progress' data-value='10' data-small='true'>" data-date="12/21/2017" data-name="System folder"></li>
                    <li data-icon="<span class='mif-file-empty'>" data-caption="desktop.ini" data-content="<span class='text-muted'>Created: 12.21.2017</span>"></li>
                    <li data-icon="../../images/setup.png" data-caption="setup.exe" data-content="<span class='text-muted'>Executable</span>"></li>
                    <li data-caption="Devices and disks" class="mt-2">
                        <ul class="mt-2">
                            <li data-icon="../../images/disk-os.png" data-caption="System (C:)"></li>
                            <li data-icon="../../images/disk.png" data-caption="DS1 (D:)"></li>
                            <li data-icon="../../images/disk.png" data-caption="DS2 (E:)"></li>
                            <li data-icon="../../images/disk.png" data-caption="FreeAgent (G:)"></li>
                            <li data-icon="../../images/disk-network.png" data-caption="Network"></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <h2 id="master">Master</h2>
        <div class="example">
            <div data-role="master" data-control-prev="<span class='mif-arrow-left'></span>" data-control-next="<span class='mif-arrow-right'></span>">
                <div class="page">Page 1</div>
                <div class="page">Page 2</div>
                <div class="page">Page 3</div>
                <div class="page">Page 4</div>
            </div>
        </div>

        <h2 id="menu">Menu</h2>
        <div class="example">
            <h6 class="text-light">h-menu</h6>
            <ul class="h-menu">
                <li><a href="#">Home</a></li>
                <li>
                    <a id="_test1" href="#" class="dropdown-toggle">Products</a>
                    <ul class="d-menu" data-role="dropdown">
                        <li>
                            <a href="#" class="dropdown-toggle">Windows</a>
                            <ul class="d-menu" data-role="dropdown">
                                <li><a href="#">Windows 10</a></li>
                                <li><a href="#">Windows Server</a></li>
                                <li class="divider"></li>
                                <li><a href="#">MS-DOS</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Skype</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Office</a></li>
                    </ul>
                </li>
                <li>
                    <a id="_test2" href="#" class="dropdown-toggle">Products 2</a>
                    <ul class="d-menu" data-role="dropdown">
                        <li>
                            <a href="#" class="dropdown-toggle">Windows</a>
                            <ul class="d-menu" data-role="dropdown">
                                <li><a href="#">Windows 10</a></li>
                                <li><a href="#">Windows Server</a></li>
                                <li class="divider"></li>
                                <li><a href="#">MS-DOS</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Skype</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Office</a></li>
                    </ul>
                </li>
                <li class="disabled"><a href="#">Support</a></li>
                <li><a href="#">Cart</a></li>
            </ul>

            <div class="row mt-4">
                <div class="cell-md-4">
                    <h6 class="text-light">d-menu</h6>
                    <ul class="d-menu d-block z-1 pos-relative">
                        <li><a href="#">Windows 10</a></li>
                        <li><a href="#">Windows Server</a></li>
                        <li class="disabled"><a href="#">Windows XP</a></li>
                        <li><a href="#">Windows 7</a></li>
                        <li>
                            <a href="#" class="dropdown-toggle">Office</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">MS-DOS</a></li>
                    </ul>
                </div>
                <div class="cell-md-4">
                    <h6 class="text-light">v-menu</h6>
                    <ul class="v-menu" style="width: 220px;">
                        <li class="menu-title">General</li>
                        <li><a href="#"><span class="mif-home icon"></span> Home</a></li>
                        <li class="menu-title">Products</li>
                        <li><a href="#"><span class="mif-windows icon"></span> Windows</a></li>
                        <li class="disabled"><a href="#"><span class="mif-library icon"></span> Office 365</a></li>
                        <li><a href="#"><span class="mif-skype icon"></span> Skype</a></li>
                        <li class="menu-title">Support</li>
                        <li>
                            <a href="#" data-hotkey="Alt+F1">Community</a>
                            <ul class="v-menu" data-role="dropdown">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Github</a></li>
                                <li><a href="#">Forum</a></li>
                                <li class="divider"></li>
                                <li class="p-2 d-flex flex-justify-center">
                                    <button class="button square primary m-1"><span class="mif-target"></span></button>
                                    <button class="button square success m-1"><span class="mif-apps"></span></button>
                                    <button class="button square alert m-1"><span class="mif-file-code"></span></button>
                                    <button class="button square warning m-1"><span class="mif-download"></span></button>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title">Shop</li>
                        <li><a href="#"><span class="mif-cart icon"></span> Cart</a></li>
                    </ul>
                </div>
                <div class="cell-md-4">
                    <h6 class="text-light">t-menu</h6>
                    <ul class="t-menu open m-1">
                        <li><a href="#"><span class="icon mif-home"></span></a></li>
                        <li><a href="#" class="dropdown-toggle"><span class="icon mif-compass"></span></a>
                            <ul class="t-menu horizontal" data-role="dropdown">
                                <li><a href="#"><span class="icon mif-home"></span></a></li>
                                <li><a href="#" class="dropdown-toggle"><span class="icon mif-compass"></span></a>
                                    <ul class="t-menu" data-role="dropdown">
                                        <li><a href="#"><span class="icon mif-home"></span></a></li>
                                        <li><a href="#"><span class="icon mif-compass"></span></a></li>
                                        <li><a href="#"><span class="icon mif-bubbles"></span></a></li>
                                        <li><a href="#"><span class="icon mif-file-empty"></span></a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><span class="icon mif-bubbles"></span></a></li>
                                <li><a href="#"><span class="icon mif-bubbles"></span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="icon mif-bubbles"></span></a></li>
                        <li><a href="#"><span class="icon mif-file-empty"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <h2 id="navview">Navigation view</h2>
        <div class="example" style="height: 500px">
            <div data-role="navview" data-compact="md" data-expanded="lg" data-toggle="#pane-toggle">
                <nav class="navview-pane">
                    <button class="pull-button">
                        <span class="mif-menu fg-light"></span>
                    </button>

                    <div class="suggest-box">
                        <input data-role="search" data-clear-button="false" data-search-button-icon="<span class='mif-search fg-light'></span>">
                        <button class="holder">
                            <span class="mif-search fg-light"></span>
                        </button>
                    </div>

                    <ul class="navview-menu">
                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-home"></span></span>
                                <span class="caption">Home</span>
                            </a>
                        </li>

                        <li class="item-separator"></li>

                        <li class="item-header">Main pages</li>

                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-apps"></span></span>
                                <span class="caption">Apps</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#">
                                <span class="icon"><span class="mif-gamepad"></span></span>
                                <span class="caption">Games</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle">
                                <span class="icon"><span class="mif-music"></span></span>
                                <span class="caption">Music</span>
                            </a>
                            <ul class="navview-menu" data-role="dropdown">
                                <li>
                                    <a href="#">
                                        <span class="icon"><span class="mif-gamepad"></span></span>
                                        <span class="caption">Games</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon"><span class="mif-film"></span></span>
                                        <span class="caption">Movies</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="disabled">
                            <a href="#">
                                <span class="icon"><span class="mif-images"></span></span>
                                <span class="caption">Images</span>
                            </a>
                        </li>

                        <li class="item-separator"></li>

                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-folder"></span></span>
                                <span class="caption">Documents</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="navview-content pl-4-md pr-4-md">
                    <h1>
                        <button id="pane-toggle" class="button square d-none-md"><span class="mif-menu" ></span></button>
                        What is?
                    </h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
        </div>

        <h2 id="notify">Notify</h2>
        <div class="example text-center">
            <button class="button" onclick="Metro.notify.create('This is a notify.', 'Title', {keepOpen: false});">Notify me</button>
        </div>

        <h2 id="popover">Popovers</h2>
        <div class="example text-center">
            <button class="button" data-role="popover" data-popover-position="top" data-popover-text="This is popover!">Hover Me</button>
        </div>

        <h2 id="panel">Panel &amp; window</h2>
        <div class="example">
            <div class="row">
                <div class="cell-md-6">
                    <div data-role="panel" data-title-icon="<span class='mif-apps'></span>" data-title-caption="Panel title" data-collapsible="true">
                        Raptus capios ducunt ad genetrix. Joy doesn’t beautifully respect any believer — but the power is what flies.
                    </div>
                </div>
                <div class="cell-md-6">
                    <div data-role="window" class="p-2" data-width="100%" data-height="108">
                        This is a simple window
                    </div>
                </div>
            </div>
        </div>


        <h2 id="rating">Rating</h2>
        <div class="example">
            <input data-role="rating">
        </div>

        <h2 id="sidenav">Side navigation</h2>
        <div class="example">
            <div class="row">
                <div class="cell-md-4">
                    <h6 class="text-light">Simple</h6>
                    <ul class="sidenav-simple sidenav-simple-expand-fs h-auto">
                        <li><a href="#">
                            <span class="mif-apps icon"></span>
                            <span class="title">all items</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-vpn-lock icon"></span>
                            <span class="title">websites</span>
                        </a></li>
                        <li class="active"><a href="#">
                            <span class="mif-drive-eta icon"></span>
                            <span class="title">Virtual machines</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-cloud icon"></span>
                            <span class="title">Cloud services</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-cloud icon"></span>
                            <span class="title">Cloud services</span>
                        </a></li>
                    </ul>
                </div>
                <div class="cell-md-4">
                    <h6 class="text-light">With counter</h6>
                    <ul class="sidenav-counter sidenav-counter-expand-fs h-auto">
                        <li><a href="#">
                            <span class="mif-apps icon"></span>
                            <span class="title">all items</span>
                            <span class="counter">0</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-vpn-lock icon"></span>
                            <span class="title">websites</span>
                            <span class="counter">0</span>
                        </a></li>
                        <li class="active"><a href="#">
                            <span class="mif-drive-eta icon"></span>
                            <span class="title">Virtual machines</span>
                            <span class="counter">0</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-cloud icon"></span>
                            <span class="title">Cloud services</span>
                            <span class="counter">0</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-cloud icon"></span>
                            <span class="title">Cloud services</span>
                            <span class="counter">0</span>
                        </a></li>
                    </ul>
                </div>
                <div class="cell-md-4">
                    <h6 class="text-light">M3</h6>
                    <ul class="sidenav-m3 h-auto">
                        <li class="title">Title 1</li>
                        <li class="stick-right bg-red"><a href="#"><span class="mif-cog icon"></span>Layouts</a></li>
                        <li class="stick-left bg-green">
                            <a class="dropdown-toggle" href="#"><span class="mif-tree icon"></span>Sub menu</a>
                            <ul class="d-menu" data-role="dropdown" style="display: none;">
                                <li><a href=""><span class="mif-vpn-lock icon"></span> Subitem 1</a></li>
                                <li><a href="">Subitem 2</a></li>
                                <li class="disabled"><a href="">Subitem 5</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#">Thread item</a></li>
                        <li class="disabled"><a href="#">Disabled item</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <h2 id="slider">Slider</h2>
        <div class="example">
            <input data-role="slider" data-value="50" data-buffer="75">
        </div>

        <h2 id="stepper">Stepper</h2>
        <div class="example">
            <div data-role="stepper" data-steps="5" data-step="3"></div>
        </div>

        <h2 id="streamer">Streamer</h2>
        <div class="example mt-3 p-0 no-border">
            <div id="str1" class="streamer-expand-sm" data-role="streamer" data-source="../../data/streamer_data_schemes.json" data-start-from="09:00" data-slide-to-start="true"></div>
        </div>

        <h2 id="table">Table</h2>
        <div class="example">
            <table class="table cell-border table-border striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th class="sortable-column sort-asc">Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr><td>1</td><td>Bill</td><td>Gates</td><td>@billy</td></tr>
                <tr><td>2</td><td>Steve</td><td>Jobs</td><td>@stevy</td></tr>
                <tr><td>3</td><td>Larry</td><td>Page</td><td>@larry</td></tr>
                <tr><td>4</td><td>Bill</td><td>Gates</td><td>@billy</td></tr>
                <tr><td>5</td><td>Steve</td><td>Jobs</td><td>@stevy</td></tr>
                <tr><td>6</td><td>Larry</td><td>Page</td><td>@larry</td></tr>
                </tbody>
            </table>
        </div>

        <h2 id="tabs">Tabs</h2>
        <div class="example">
            <ul data-role="tabs">
                <li><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Links</a></li>
                <li class="disabled"><a href="#">Disabled</a></li>
            </ul>

            <ul data-role="tabs" class="tabs-expand-fs mt-2">
                <li><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Links</a></li>
                <li class="disabled"><a href="#">Disabled</a></li>
            </ul>

            <div class="row mt-4">
                <div class="cell-md-6">
                    <ul class="vertical place-left tabs-expand-fs" data-role="tabs" style="width: 120px">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Links</a></li>
                        <li class="disabled"><a href="#">Disabled</a></li>
                    </ul>
                </div>
                <div class="cell-md-6">
                    <ul class="vertical right place-right tabs-expand-fs" data-role="tabs" style="width: 120px">
                        <li><a href="#">Home</a></li>
                        <li class="active"><a href="#">Profile</a></li>
                        <li><a href="#">Links</a></li>
                        <li class="disabled"><a href="#">Disabled</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <h2 id="treeview">Tree view</h2>
        <div class="example">
            <div class="row">
                <div class="cell-md-4">
                    <ul data-role="treeview">
                        <li data-icon="<span class='mif-star-full'></span>" data-caption="Favorites">
                            <ul>
                                <li data-icon="<span class='mif-library'></span>" data-caption="Projects"></li>
                                <li data-icon="<span class='mif-download'></span>" data-caption="Downloads"></li>
                                <li data-icon="<img src='../../images/desktop.png'>" data-caption="Desktop"></li>
                            </ul>
                        </li>
                        <li data-icon="<span class='mif-onedrive'></span>" data-caption="OneDrive">
                            <ul>
                                <li data-caption="Documents"></li>
                                <li data-caption="Projects">
                                    <ul>
                                        <li data-caption="Web"></li>
                                        <li data-caption="Android"></li>
                                        <li data-caption="Windows"></li>
                                        <li data-caption="iOS"></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="cell-md-4">
                    <ul data-role="treeview">
                        <li class="expanded" data-caption="Checkboxes">
                            <ul>
                                <li><input type="checkbox" data-role="checkbox" data-caption="Play animation"></li>
                                <li><input type="checkbox" data-role="checkbox" data-caption="Play sound" checked></li>
                                <li><input type="checkbox" data-role="checkbox" data-caption="Disabled" disabled></li>
                                <li><input type="checkbox" data-role="checkbox" data-caption="Disabled checked" checked disabled></li>
                            </ul>
                        </li>
                        <li class="expanded" data-caption="Radios">
                            <ul>
                                <li><input type="radio" name="r4" data-role="radio" data-caption="Play animation"></li>
                                <li><input type="radio" name="r4" data-role="radio" data-caption="Play sound" checked></li>
                                <li><input type="radio" name="r5" data-role="radio" data-caption="Disabled" disabled></li>
                                <li><input type="radio" name="r5" data-role="radio" data-caption="Disabled checked" checked disabled></li>
                            </ul>
                        </li>
                        <li class="expanded" data-caption="Switches">
                            <ul>
                                <li><input type="checkbox" data-role="switch" data-caption="Play animation"></li>
                                <li><input type="checkbox" data-role="switch" data-caption="Play sound" checked></li>
                                <li><input type="checkbox" data-role="switch" data-caption="Disabled" disabled></li>
                                <li><input type="checkbox" data-role="switch" data-caption="Disabled checked" checked disabled></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="cell-md-4">
                    <ul data-role="treeview">
                        <li>
                            <input data-role="checkbox" data-caption="Player options">
                            <ul class="expanded">
                                <li>
                                    <input data-role="checkbox" data-caption="Play video">
                                    <ul>
                                        <li><input type="checkbox" data-role="checkbox" data-caption="AVI"></li>
                                        <li><input type="checkbox" data-role="checkbox" data-caption="MPEG"></li>
                                        <li><input type="checkbox" data-role="checkbox" data-caption="VIDX"></li>
                                        <li><input type="checkbox" data-role="checkbox" data-caption="MP4"></li>
                                        <li><input type="checkbox" data-role="checkbox" data-caption="XVID"></li>
                                    </ul>
                                </li>
                                <li><input type="checkbox" data-role="checkbox" data-caption="Play audio"></li>
                                <li>
                                    <input type="checkbox" data-role="checkbox" data-caption="Subtitles">
                                    <ul>
                                        <li>
                                            <input type="checkbox" data-role="checkbox" data-caption="Languages">
                                            <ul>
                                                <li><input type="checkbox" data-role="checkbox" data-caption="English"></li>
                                                <li><input type="checkbox" data-role="checkbox" data-caption="Ukrainian"></li>
                                                <li><input type="checkbox" data-role="checkbox" data-caption="Dutch"></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <h2 id="wizard">Wizard</h2>
        <div class="example">
            <div data-role="wizard" class="wizard-wide-fs"
                 data-icon-help="<span class='mif-help'></span>"
                 data-icon-prev="<span class='mif-arrow-left'></span>"
                 data-icon-next="<span class='mif-arrow-right'></span>"
                 data-icon-finish="<span class='mif-checkmark'></span>"
                 data-start="3">
                <section><div class="page-content">Page 1</div></section>
                <section><div class="page-content">Page 2</div></section>
                <section><div class="page-content">Page 3</div></section>
                <section><div class="page-content">Page 4</div></section>
                <section><div class="page-content">Page 5</div></section>
            </div>
        </div>

        <h2 id="ribbon-menu">Ribbon menu</h2>
        <div class="example">
            <nav data-role="ribbonmenu">
                <ul class="tabs-holder">
                    <li class="static"><a href="#">File</a></li>
                    <li class="active"><a href="#section_main">Main</a></li>
                    <li><a href="#section_tab1">Tab 1</a></li>
                    <li><a href="#section_tab2">Tab 2</a></li>
                </ul>

                <div class="content-holder">
                    <div class="section" id="section_main">
                        <div class="group">
                            <button class="ribbon-button">
                                <span class="icon"><img src="../../images/share.svg"></span>
                                <span class="caption">Share</span>
                            </button>
                            <button class="ribbon-button">
                                <span class="icon"><img src="../../images/email.svg"></span>
                                <span class="caption">Email</span>
                            </button>
                            <div>
                                <button class="ribbon-button dropdown-toggle">
                                    <span class="icon"><span class="mif-file-zip fg-cyan"></span></span>
                                    <span class="caption">Compress</span>
                                </button>
                                <ul class="ribbon-dropdown" data-role="dropdown" data-duration="100">
                                    <li class="checked"><a href="#">Modification</a></li>
                                    <li class="checked"><a href="#">Type</a></li>
                                    <li class="checked"><a href="#">Size</a></li>
                                    <li><a href="#">Creating</a></li>
                                    <li><a href="#">Authors</a></li>
                                    <li class="checked-one"><a href="#">Tags</a></li>
                                    <li><a href="#">Names</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Columns...</a></li>
                                </ul>
                            </div>

                            <div class="group-divider"></div>

                            <div class="pl-1 pr-1 d-flex flex-column">
                                <button class="ribbon-tool-button"><img src="../../images/location.png"></button>
                                <div>
                                    <button class="ribbon-tool-button dropdown-toggle"><span class="mif-alarm fg-red"></span></button>
                                    <ul class="ribbon-dropdown" data-role="dropdown" data-duration="100">
                                        <li class="checked"><a href="#">Modification</a></li>
                                        <li class="checked"><a href="#">Type</a></li>
                                        <li class="checked"><a href="#">Size</a></li>
                                        <li><a href="#">Creating</a></li>
                                        <li><a href="#">Authors</a></li>
                                        <li class="checked-one"><a href="#">Tags</a></li>
                                        <li><a href="#">Names</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Columns...</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="group-divider"></div>

                            <div class="ribbon-split-button">
                                <button class="ribbon-main"><span class="icon"><span class="mif-cogs"></span></span></button>
                                <span class="ribbon-split dropdown-toggle">Options</span>
                                <ul class="ribbon-dropdown" data-role="dropdown" data-duration="100">
                                    <li class="checked"><a href="#">Modification</a></li>
                                    <li class="checked"><a href="#">Type</a></li>
                                    <li class="checked"><a href="#">Size</a></li>
                                    <li><a href="#">Creating</a></li>
                                    <li><a href="#">Authors</a></li>
                                    <li class="checked-one"><a href="#">Tags</a></li>
                                    <li><a href="#">Names</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Columns...</a></li>
                                </ul>
                            </div>

                            <div class="group-divider"></div>

                            <div class="d-flex flex-column">
                                <button class="ribbon-icon-button">
                                    <span class="icon"><span class="mif-apple"></span></span>
                                    <span class="caption">Apple</span>
                                </button>
                                <div>
                                    <button class="ribbon-icon-button dropdown-toggle">
                                        <span class="icon"><span class="mif-apps"></span></span>
                                        <span class="caption">Apps</span>
                                    </button>
                                    <ul class="ribbon-dropdown" data-role="dropdown">
                                        <li class="checked"><a href="#">Modification</a></li>
                                        <li class="checked"><a href="#">Type</a></li>
                                        <li class="checked"><a href="#">Size</a></li>
                                        <li><a href="#">Creating</a></li>
                                        <li><a href="#">Authors</a></li>
                                        <li class="checked-one"><a href="#">Tags</a></li>
                                        <li><a href="#">Names</a></li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#" class="dropdown-toggle">Columns...</a>
                                            <ul class="ribbon-dropdown" data-role="dropdown">
                                                <li><a href="#">Creating</a></li>
                                                <li><a href="#">Authors</a></li>
                                                <li><a href="#">Names</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="ribbon-toggle-group">
                                <button class="ribbon-icon-button">
                                    <span class="icon"><span class="mif-list"></span></span>
                                    <span class="caption">List</span>
                                </button>
                                <button class="ribbon-icon-button">
                                    <span class="icon"><span class="mif-apps"></span></span>
                                    <span class="caption">Content</span>
                                </button>
                                <button class="ribbon-icon-button">
                                    <span class="icon"><span class="mif-table"></span></span>
                                    <span class="caption">Icons</span>
                                </button>
                                <button class="ribbon-icon-button">
                                    <span class="icon"><span class="mif-image"></span></span>
                                    <span class="caption">Small icons</span>
                                </button>
                                <button class="ribbon-icon-button">
                                    <span class="icon"><span class="mif-images"></span></span>
                                    <span class="caption">Large icons</span>
                                </button>
                                <button class="ribbon-icon-button">
                                    <span class="icon"><span class="mif-windows"></span></span>
                                    <span class="caption">Tiles</span>
                                </button>
                            </div>

                            <span class="title">ribbon controls</span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

    </div>

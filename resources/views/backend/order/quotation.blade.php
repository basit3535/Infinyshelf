<html>

<head>
    <meta charset="utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/sms-logo.png') }}">
    <title>Deskbook - Quotation</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="{{ asset('theme/assets/css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="license" href="https://www.opensource.org/licenses/mit-license/" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Stick+No+Bills:wght@500&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        *[contenteditable] {
            border-radius: 0.25em;
            padding: .25rem;
            min-width: 1.5em;
            outline: 0;
        }

        body {
            background-color: white !important;
            font-family: 'Stick No Bills', sans-serif;
        }

        @media print {
            .card {
                -webkit-print-color-adjust: exact !important;
                color-adjust: exact !important;
                print-color-adjust: exact !important;
                background-color: transparent !important;
            }

            table {
                background: transparent !important;
            }

            .bg-image {
                background-image: url({{ asset('images/bg-logo.png') }});
                background-repeat: no-repeat;
                -webkit-print-color-adjust: exact;
                background-position: center bottom;
            }
        }

        /* @page {
              size: A4 landscape;
      } */
        /* body.A4.landscape .sheet {
              width: 297mm;
              height: 109mm;
      } */
        .card-body {
            padding-top: 0 !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
            padding-bottom: 0 !important;

        }

        .bg-image {
            background-image: url({{ asset('images/bg-logo.png') }});
            background-repeat: no-repeat;
            background-position: center bottom;
        }

        .btn {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: rgb(62, 62, 123) !important;
            border-color: rgb(62, 62, 123) !important;
        }

        div,
        h4,
        h5,
        p,
        strong,
        small,
        tr,
        td,
        th {
            color: black !important;
        }

        .edit td span {
            font-weight: 300;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .edit td {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
            text-transform: capitalize;
        }
    </style>
</head>

<body class="A4 landscape">
    <section class="container-fluid sheet padding-10mm">
        <div class="row mt-2 mb-2">
            <div class="col-3">
                <button class="btn btn-primary btn-sm text-uppercase" id="print">Print Invoice <i
                        class="ml-2 fa fa-print"></i></button>
            </div>

            <div class="col-6"></div>

            <div class="col-3  text-right">
                <a href="{{ url('home') }}" class="btn btn-primary btn-sm text-uppercase" id="back">Back <i
                        class="ml-2 fa fa-arrow-circle-left"></i></a>
            </div>
        </div>

        <div class="card bg-image">

            <div class="bg-transparent">
                <div class="row">
                    <div class="col-md-4 mt-3 text-left pl-5">
                        <h4 class="">Contact #</h4>
                        <p><b>Abdul Basit :</b><i class="fa fa-whatsapp ml-2 text-success" aria-hidden="true"></i>
                            0321-4748699</p>

                        <p><b>Muhammad Hamza :</b><i class="fa fa-whatsapp ml-2 text-success" aria-hidden="true"></i>
                            0304-9298665</p>

                        <h4 class="">Address #</h4>
                        <p>Chak # 266 Khurrianwala Faisalabad.</p>

                    </div>

                    <div class="col-md-4 text-center">
                        <h3 class="text-uppercase"><strong>Quotation</strong></h3>

                        <img src="{{ asset('images/sms-logo.png') }}" class="mt-3" alt="Deskbook Inventory"
                            style="width: 100%; max-width:200px">

                    </div>


                    <div class="col-md-4 text-center mt-4">

                        <h4 style="line-height: 30px;"> We Deal in all <br> kinds of industrial <br> equipments & parts
                        </h4>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <div class="row">

                    <div class="col-md-4 mt-4 mb-2">
                        <div class="ml-2">
                            <strong contenteditable class="border">...</strong><br><br>
                            <strong contenteditable>House Size : </strong>

                            <span class="font-weight-bold" contenteditable> 200 x 40</strong>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mb-2 text-center">
                        <strong contenteditable class="border">...</strong><br><br>
                        <strong contenteditable>Customer Name : </strong>
                        <span class="font-weight-bold" contenteditable> Mr. Hamza</strong>
                    </div>

                    <div class="col-md-4 mt-3 mb-2 text-right">
                        <div class="mr-2">
                            <strong contenteditable class="border">...</strong><br><br>
                            <strong contenteditable>Customer Ph #</strong>
                            <span class="font-weight-bold" contenteditable> +92 304 9298 665</strong>
                        </div>
                    </div>


                </div>

                <div class="col-md-12 m-auto">
                    <table class="inventory table table-sm border text-black mt-4">
                        <thead>
                            <tr>
                                <th><span>#</span></th>
                                <th><span>Product</span></th>
                                <th style="display:none"><span>Description</span></th>
                                <th><span>Price</span></th>
                                <th><span>Quantity</span></th>
                                <th><span>Total Price</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $value)
                                <tr class="edit">
                                    <td><span contenteditable="">{{ $value->id }}</span></td>
                                    <td><span contenteditable="">{{ $value->name }}</span></td>
                                    <td><span contenteditable="">{{ $value->price }}</span></td>
                                    <td><span contenteditable="">{{ $value->quantity }}</span></td>
                                    <td><span contenteditable=""></span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12 m-auto">
                    <a class="add btn btn-sm btn-primary text-white fw-bold" id="add_btn">+</a>

                    <div class="row">
                        <div class="col-md-4 ml-auto">
                            <table class="balance table table-sm border">
                                <tr class="border">
                                    <th colspan="2" class="text-center"><span>Grand Total</span></th>
                                </tr>
                                <tr class="border">
                                    <th><span>Grand Total</span></th>
                                    <td><span data-prefix></span><span>600.00</span></td>
                                </tr>
                                <tr class="border">
                                    <th><span>Discount</span></th>
                                    <td><span data-prefix></span><span contenteditable>0.00</span></td>
                                </tr>
                                <tr class="border">
                                    <th><span>Total Bill</span></th>
                                    <td><span data-prefix></span><span>600.00</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <table class="meta table table-striped table-sm d-none">
                        <tr>
                            <th><span contenteditable>Invoice #</span></th>
                            <td><span contenteditable>101138</span></td>
                        </tr>
                        <tr>
                            <th><span contenteditable>Date</span></th>
                            <td><span contenteditable>January 1, 2012</span></td>
                        </tr>
                        <tr>
                            <th><span contenteditable>Amount Due</span></th>
                            <td><span id="prefix" contenteditable></span><span>600.00</span></td>
                        </tr>
                    </table>

                </div>


            </div>
        </div>
    </section>

    <script>
        (function(document) {
            var
                head = document.head = document.getElementsByTagName('head')[0] || document.documentElement,
                elements =
                'article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output picture progress section summary time video x'
                .split(' '),
                elementsLength = elements.length,
                elementsIndex = 0,
                element;

            while (elementsIndex < elementsLength) {
                element = document.createElement(elements[++elementsIndex]);
            }

            element.innerHTML = 'x<style>' +
                'article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}' +
                'audio[controls],canvas,video{display:inline-block}' +
                '[hidden],audio{display:none}' +
                'mark{background:#FF0;color:#000}' +
                '</style>';

            return head.insertBefore(element.lastChild, head.firstChild);
        })(document);

        /* Prototyping
        /* ========================================================================== */

        (function(window, ElementPrototype, ArrayPrototype, polyfill) {
            function NodeList() {
                [polyfill]
            }
            NodeList.prototype.length = ArrayPrototype.length;

            ElementPrototype.matchesSelector = ElementPrototype.matchesSelector ||
                ElementPrototype.mozMatchesSelector ||
                ElementPrototype.msMatchesSelector ||
                ElementPrototype.oMatchesSelector ||
                ElementPrototype.webkitMatchesSelector ||
                function matchesSelector(selector) {
                    return ArrayPrototype.indexOf.call(this.parentNode.querySelectorAll(selector), this) > -1;
                };

            ElementPrototype.ancestorQuerySelectorAll = ElementPrototype.ancestorQuerySelectorAll ||
                ElementPrototype.mozAncestorQuerySelectorAll ||
                ElementPrototype.msAncestorQuerySelectorAll ||
                ElementPrototype.oAncestorQuerySelectorAll ||
                ElementPrototype.webkitAncestorQuerySelectorAll ||
                function ancestorQuerySelectorAll(selector) {
                    for (var cite = this, newNodeList = new NodeList; cite = cite.parentElement;) {
                        if (cite.matchesSelector(selector)) ArrayPrototype.push.call(newNodeList, cite);
                    }

                    return newNodeList;
                };

            ElementPrototype.ancestorQuerySelector = ElementPrototype.ancestorQuerySelector ||
                ElementPrototype.mozAncestorQuerySelector ||
                ElementPrototype.msAncestorQuerySelector ||
                ElementPrototype.oAncestorQuerySelector ||
                ElementPrototype.webkitAncestorQuerySelector ||
                function ancestorQuerySelector(selector) {
                    return this.ancestorQuerySelectorAll(selector)[0] || null;
                };
        })(this, Element.prototype, Array.prototype);

        /* Helper Functions
        /* ========================================================================== */

        function generateTableRow() {
            var emptyColumn = document.createElement('tr');

            emptyColumn.innerHTML = '<td class="sub_btn"><a class="cut">Remove</a><span contenteditable></span></td>' +
                '<td><span contenteditable></span></td>' +
                '<td><span data-prefix>$</span><span contenteditable>0.00</span></td>' +
                '<td><span contenteditable>0</span></td>' +
                '<td><span data-prefix>$</span><span>0.00</span></td>';

            return emptyColumn;
        }

        function parseFloatHTML(element) {
            return parseFloat(element.innerHTML.replace(/[^\d\.\-]+/g, '')) || 0;
        }

        function parsePrice(number) {
            return number.toFixed(2).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,');
        }

        /* Update Number
        /* ========================================================================== */

        function updateNumber(e) {
            var
                activeElement = document.activeElement,
                value = parseFloat(activeElement.innerHTML),
                wasPrice = activeElement.innerHTML == parsePrice(parseFloatHTML(activeElement));

            if (!isNaN(value) && (e.keyCode == 38 || e.keyCode == 40 || e.wheelDeltaY)) {
                e.preventDefault();

                value += e.keyCode == 38 ? 1 : e.keyCode == 40 ? -1 : Math.round(e.wheelDelta * 0.025);
                value = Math.max(value, 0);

                activeElement.innerHTML = wasPrice ? parsePrice(value) : value;
            }

            updateInvoice();
        }

        /* Update Invoice
        /* ========================================================================== */

        function updateInvoice() {
            var total = 0;
            var cells, price, total, a, i;

            // update inventory cells
            // ======================

            for (var a = document.querySelectorAll('table.inventory tbody tr'), i = 0; a[i]; ++i) {
                // get inventory row cells
                cells = a[i].querySelectorAll('span:last-child');

                // set price as cell[2] * cell[3]
                price = parseFloatHTML(cells[2]) * parseFloatHTML(cells[3]);

                // add price to total
                total += price;

                // set row total
                cells[4].innerHTML = price;
            }

            // update balance cells
            // ====================

            // get balance cells
            cells = document.querySelectorAll('table.balance td:last-child span:last-child');

            // set total
            cells[0].innerHTML = total;

            // set balance and meta balance
            cells[2].innerHTML = document.querySelector('table.meta tr:last-child td:last-child span:last-child')
                .innerHTML = parsePrice(total - parseFloatHTML(cells[1]));

            // update prefix formatting
            // ========================

            var prefix = document.querySelector('#prefix').innerHTML;
            for (a = document.querySelectorAll('[data-prefix]'), i = 0; a[i]; ++i) a[i].innerHTML = prefix;

            // update price formatting
            // =======================

            for (a = document.querySelectorAll('span[data-prefix] + span'), i = 0; a[i]; ++i)
                if (document.activeElement != a[i]) a[i].innerHTML = parsePrice(parseFloatHTML(a[i]));
        }

        /* On Content Load
        /* ========================================================================== */

        function onContentLoad() {
            updateInvoice();

            var
                input = document.querySelector('input'),
                image = document.querySelector('img');

            function onClick(e) {
                var element = e.target.querySelector('[contenteditable]'),
                    row;

                element && e.target != document.documentElement && e.target != document.body && element.focus();

                if (e.target.matchesSelector('.add')) {
                    document.querySelector('table.inventory tbody').appendChild(generateTableRow());
                } else if (e.target.className == 'cut') {
                    row = e.target.ancestorQuerySelector('tr');

                    row.parentNode.removeChild(row);
                }

                updateInvoice();
            }

            function onEnterCancel(e) {
                e.preventDefault();

                image.classList.add('hover');
            }

            function onLeaveCancel(e) {
                e.preventDefault();

                image.classList.remove('hover');
            }

            function onFileInput(e) {
                image.classList.remove('hover');

                var
                    reader = new FileReader(),
                    files = e.dataTransfer ? e.dataTransfer.files : e.target.files,
                    i = 0;

                reader.onload = onFileLoad;

                while (files[i]) reader.readAsDataURL(files[i++]);
            }

            function onFileLoad(e) {
                var data = e.target.result;

                image.src = data;
            }

            if (window.addEventListener) {
                document.addEventListener('click', onClick);

                document.addEventListener('mousewheel', updateNumber);
                document.addEventListener('keydown', updateNumber);

                document.addEventListener('keydown', updateInvoice);
                document.addEventListener('keyup', updateInvoice);

                input.addEventListener('focus', onEnterCancel);
                input.addEventListener('mouseover', onEnterCancel);
                input.addEventListener('dragover', onEnterCancel);
                input.addEventListener('dragenter', onEnterCancel);

                input.addEventListener('blur', onLeaveCancel);
                input.addEventListener('dragleave', onLeaveCancel);
                input.addEventListener('mouseout', onLeaveCancel);

                input.addEventListener('drop', onFileInput);
                input.addEventListener('change', onFileInput);
            }
        }

        window.addEventListener && document.addEventListener('DOMContentLoaded', onContentLoad);
    </script>


    <script>
        $(document).ready(function() {
            $('#print').click(function() {
                $(this).hide();
                $('#back').hide();
                $('#add_btn').hide();
                $('.sub_btn').css("visibility", "hidden");
                event.preventDefault();
                window.print();
                $(this).show();
            });

        });
    </script>
</body>

</html>

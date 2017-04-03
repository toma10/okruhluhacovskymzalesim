@extends('layouts.app')

@section('content')
    <section class="Section">
        <div class="container">
            <h2 class="is-title has-padding-bottom">
                Registrace
            </h2>
            <script>
                var RRReg_eventid=75437;
                var RRReg_key="jSHe0o4gvmJd";
                var RRReg_PreferredRegistration="single";
                var RRReg_PreferredContest=0;
                var RRReg_server="https://events2.raceresult.com";
            </script>
            <script src="https://events2.raceresult.com/registration/init.js?lang=cz"></script>
            <style>
                #RRReg_divHintSSL {
                    display: none;
                }

                #divRRReg div.NavBar {
                    background-color: #0a0a0a;
                }

                #divRRReg div.NavBar > div.Item {
                    line-height: 20px;
                }

                #divRRReg div.RRReg_divLine {
                    margin-bottom: 14px;
                }

                #divInputLine1_1 {
                    margin-top: 10px;
                }

                #divRRReg div.RRReg_divLabel {
                    vertical-align: middle;
                    text-align: left;
                    padding: 0;
                    width: initial;
                    display: block;
                    color: #0a0a0a;
                    font-size: 14px;
                    font-weight: 700;
                    margin-bottom: 10px;
                }

                #divRRReg div.RRReg_divLabel:first-letter {
                    text-transform: uppercase;
                }

                #divRRReg div.RRReg_divInput {
                    padding: 2px 0 5px;
                    width: 100%;
                }

                #divRRReg input[type='text'], #divRRReg select {
                    background: #fff;
                    padding: 6px;
                    height: auto;
                    border: 1px solid #c7c6c6;
                    border-radius: 3px;
                }

                #divRRReg div.RRReg_divFieldError {
                    width: 100%;
                    color: #BB0000;
                    padding: 0;
                    display: block;
                    padding-bottom: 3px;
                }

                #divRRReg input[type='button'], #divRRReg button {
                    padding: 12px 30px;
                    background: #0a0a0a;
                    border: 1px solid #e0e0e0;
                    border-radius: 3px;
                    text-transform: uppercase;
                    font-size: 14px;
                    color: #fddb19;
                    font-weight: 700;
                    transition: all 0.3s ease;
                    margin: 0;
                }

                #divRRReg input[type='button']:hover, #divRRReg button:hover {
                    background-color: #242323;
                }

                #divRRReg div.RRReg_divBtnProceed {
                    width: 100%;
                    text-align: center;
                    margin: 0;
                }

                #divRRReg div.RRReg_divCheckTerms > div:nth-child(2) {
                    max-height: none;
                }

                #divRRReg .RRReg_Link {
                    color: inherit;
                }

                #divRRReg.narrow div.RRReg_divFieldError {
                    text-align: left;
                }

                #RRReg_divCheckDataTableParent tr > td:first-child:first-letter {
                    text-transform: uppercase;
                }
            </style>
            <p class="muted has-padding-top">V případě problémů se prosím zaregistrujte <a href="https://my.raceresult.com/75437/registration?&lang=cz&mode=1">zde</a></p>
        </div>
    </section>
@endsection

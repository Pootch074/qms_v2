<div class="main">
    <div class="container">
        <!-- ==================================== MODALS ======================================== -->
        <div id="pendingBtnMdl" class="custom-modal">
            <div class="custom-modal-content">
                <div class="custom-modal-header">
                    <h5>Confirmation</h5>
                    <span class="custom-modal-close" onclick="closePendingModal()">&times;</span>
                </div>
                <div class="custom-modal-body">
                    Proceed pending client to next step?
                </div>
                <div class="custom-modal-footer">
                    <button onclick="closePendingModal()">No</button>
                    <button id="pendingBtnCnfrmYes">Yes</button>
                </div>
            </div>
        </div>

        <div id="prioBttnModal" class="custom-modal">
            <div class="custom-modal-content">
                <div class="custom-modal-header">
                    <h5 class="modal-title" id="modalLabel">Confirmation</h5>
                    <span class="custom-modal-close" onclick="closePrioModal()">&times;</span>
                </div>
                <div class="custom-modal-body">
                    Serve new client?
                </div>
                <div class="custom-modal-footer">
                    <button onclick="closePrioModal()">No</button>
                    <button id="prioBtnCnfrmYes">Yes</button>
                </div>
            </div>
        </div>
        <div id="skipbttnModal" class="custom-modal">
            <div class="custom-modal-content">
                <div class="custom-modal-header">
                    <h5 class="modal-title" id="modalLabel">Confirmation</h5>
                    <span class="custom-modal-close" onclick="skipModal()">&times;</span>
                </div>
                <div class="custom-modal-body">
                    Skip client?
                </div>
                <div class="custom-modal-footer">
                    <button onclick="skipModal()">No</button>
                    <button id="skipBtnCnfrmYes">Yes</button>
                </div>
            </div>
        </div>
        <!-- ================================== PROCEED FUNCTIONS MODAL START ================================== -->
        <div id="proceedbttnModal" class="custom-modal">
            <div class="custom-modal-content">
                <div class="custom-modal-header">
                    <h5 class="modal-title" id="modalLabel">Confirmation</h5>
                    <span class="custom-modal-close" onclick="proceedModal()">&times;</span>
                </div>
                <div class="custom-modal-body">
                    Proceed client to next step?
                </div>
                <div class="custom-modal-footer">
                    <button onclick="proceedModal()">No</button>
                    <button id="proceedBtnCnfrmYes">Yes</button>
                </div>
            </div>
        </div>
        <!-- ================================== PROCEED FUNCTIONS MODAL END ================================== -->

        <!-- ==================================== MODALS ======================================== -->
        <div class="col1">
            <div class="col1Card">
                <div class="col1Header">UPCOMING</div>
                <div class="col1Body" id="s2w1upcoming">
                    <!-- <div class="queues">A003</div> -->
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="col2Card">
                <div class="col2Header">PENDING</div>
                <div class="col2Body" id="s2w1pending">
                    <!-- <div class="pendingQueues">A001</div> -->
                </div>
            </div>
        </div>
        <div class="col3">
            <div class="col3Card">
                <div class="col3Header">SERVING STEP 2 WINDOW 1</div>
                <div class="col3Body">
                    <div class="col3row1"></div>
                    <div class="col3row2">
                        <div class="moduleInfo">
                            <h3>DSWD FOXI</h3>
                            <h3>PROTECTIVE SERVICE DIVISION</h3>
                            <h3>CRISIS INTERVENTION SECTION</h3>
                        </div>
                        <div class="servingCard" id="s2w1serving">
                        </div>

                    </div>
                    <div class="col3row3"></div>
                    <div class="col3row4">
                        <div class="topButtons">
                            <button class="priorityBtn" onclick="s2w1PrioBtn()" id="prioBtnID">
                                <i class="bi bi-people-fill" style="font-size: 5vh; color: white;"></i>
                            </button>
                            <button class="dummyBtn"></button>
                        </div>
                        <div class="botButtons">
                            <button class="skipBtn" onclick="s2w1SkipPrioBtn()" id="skipBtnID">
                                <i class="bi bi-skip-backward-fill" style="font-size: 5vh; color: white;"></i>
                            </button>
                            <button class="callBtn" onclick="s2w1CallPrioBtn()" id="callBtnID">
                                <i class="bi bi-volume-up-fill" style="font-size: 5vh; color: white;"></i>
                            </button>
                            <button class="proceedBtn" onclick="s2w1ProceedPrioBtn()" id="proceedBtnID">
                                <i class="bi bi-check-circle-fill" style="font-size: 5vh; color: white;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
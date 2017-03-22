<?php $times=$companyController->getTimes();?>
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Disponibilite</h4>
            </div>
            <div class="modal-body">
                <form action="time.html" method="post" class="form-horizontal">
                    <input type="hidden" name="companyId" value="<?=$company['id'] ?>" readonly="readonly"/>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" name="dayMonday" value="Monday" readonly="readonly"/>
                                <label class="col-sm-3 control-label">Monday</label>
                                <label class="col-sm-2 control-label">From </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="duMonday">
                                        <option value="">Choose your time</option>
                                        <?php foreach ($times as $value):?>
                                            <option value="<?=$value['du']?>"><?=$value['du']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">To </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="auMonday">
                                        <option value="">Choose your time</option>
                                        <?php foreach ($times as $value):?>
                                            <option value="<?=$value['au']?>"><?=$value['au']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" name="dayTuesday" value="Tuesday" readonly="readonly"/>
                                <label class="col-sm-3 control-label">Tuesday</label>
                                <label class="col-sm-2 control-label">From </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="duTuesday">
                                        <option value="">Choose your time</option>
                                        <?php foreach ($times as $value):?>
                                            <option value="<?=$value['du']?>"><?=$value['du']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">To </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="auTuesday">
                                        <option value="">Choose your time</option>
                                        <?php foreach ($times as $value):?>
                                            <option value="<?=$value['au']?>"><?=$value['au']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" name="dayWednesday" value="Wednesday" readonly="readonly"/>
                                <label class="col-sm-3 control-label">Wednesday</label>
                                <label class="col-sm-2 control-label">From </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="duWednesday">
                                        <option value="">Choose your time</option>
                                        <?php foreach ($times as $value):?>
                                            <option value="<?=$value['du']?>"><?=$value['du']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">To </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="auWednesday">
                                        <option value="">Choose your time</option>
                                        <?php foreach ($times as $value):?>
                                            <option value="<?=$value['au']?>"><?=$value['au']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" name="dayThursday" value="Thursday" readonly="readonly"/>
                                <label class="col-sm-3 control-label">Thursday</label>
                                <label class="col-sm-2 control-label">From </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="duThursday">
                                        <option value="">Choose your time</option>
                                        <?php foreach ($times as $value):?>
                                            <option value="<?=$value['du']?>"><?=$value['du']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">To </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="auThursday">
                                        <option value="">Choose your time</option>
                                        <?php foreach ($times as $value):?>
                                            <option value="<?=$value['au']?>"><?=$value['au']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" name="dayFriday" value="Friday" readonly="readonly"/>
                                <label class="col-sm-3 control-label">Friday</label>
                                <label class="col-sm-2 control-label">From </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="duFriday">
                                        <option value="">Choose your time</option>
                                        <?php foreach ($times as $value):?>
                                            <option value="<?=$value['du']?>"><?=$value['du']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">To </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="auFriday">
                                        <option value="">Choose your time</option>
                                        <?php foreach ($times as $value):?>
                                            <option value="<?=$value['au']?>"><?=$value['au']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label class="col-sm-offset-2 col-sm-4 control-label">Interval</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="intervalle">
                                        <option value=""> chose Interval</option>
                                        <option value="00:15:00">15 Minutes</option>
                                        <option value="00:20:00">20 Minutes</option>
                                        <option value="00:30:00">30 Minutes</option>
                                        <option value="00:45:00">45 Minutes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <div class="col-sm-offset-5 col-sm-3">
                                    <button type="submit" class="btn btn-success">Send</button>
                                </div>
                                <div class="col-sm-offset-2"></div>
                                <div class="col-sm-3">
                                    <button type="reset" class="btn btn-info">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


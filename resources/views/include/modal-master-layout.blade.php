<input type="hidden" name="contact" id="contact_search_result">

<div id="accordion1" class="accordion blue">
    <div class="accordion-item">
        <div class="accordion-header">
            Contact Search
            <span class="accordion-item-arrow"></span>
        </div>

        <div class="accordion-content">
            <select name="contact" style="width:100%" class="form-control contact"></select>
            <div class="result" style="margin: 2px 0 5px 0; color: dodgerblue"></div>


        </div>
    </div>
</div> {{--Accordion1--}}

<div id="accordion2" class="accordion blue">
    <div class="accordion-item">
        <div class="accordion-header">
            Job Detail
            <span class="accordion-item-arrow"></span>
        </div>

        <div class="accordion-content">
            <div class="form-group">
                <label for="pick_color" class="col-sm-4 control-label">Pick Color</label>
                <div class="col-sm-8">
                    <input type="text" name="setcolor" class="form-control" id="getcolor" ><span class="diplayHexColor"> <strong>  Hex: </strong></span>

                </div>
            </div>

            {{--hidden Inputs--}}
            <input type="hidden" name="contact_id" class="contact_id">
            <input type="hidden" name="job_schedule_id" class="job_schedule_id">
            <input type="hidden" name="payment_id" class="payment_id">
            <input type="hidden" name="site_contact_id" class="site_contact_id">
            <input type="hidden" name="service_call_id" class="service_call_id">
            <input type="hidden" name="extra_job_id" class="extra_job_id">

            <div class="form-group">
                <label for="job_order_number" class="col-sm-4 control-label">Job Order Number</label>
                <div class="col-sm-8">
                    <input type="text" name="job_order_number" class="form-control" id="job_order_number" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="service_type" class="col-sm-4 control-label">Service Type</label>
                <div class="col-sm-8">
                    <select class="form-control" name="service_type" id="service_type">
                        <option>Please Select</option>
                        <option>Windows Painting</option>
                        <option>Repairs and Maintenance</option>
                        <option>Repairs-Screen</option>
                        <option>New Security Screen</option>
                        <option>Glass Replacement</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="technician" class="col-sm-4 control-label">Technician</label>
                <div class="col-sm-8">
                    <input type="text" name="technician" class="form-control" id="technician">
                </div>
            </div>

            <div class="form-group">
                <label for="job_description" class="col-sm-4 control-label">Job Description</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="3" name="job_description" id="job_description"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="job_notes" class="col-sm-4 control-label">Job Notes</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="3" name="job_notes" id="job_notes"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="pre_job_sched_status" class="col-sm-4 control-label">Pre Job Schedule Status</label>
                <div class="col-sm-8">
                    <select class="form-control" name="pre_job_sched_status" id="pre_job_sched_status">
                        <option>Please Select</option>
                        <option>Pencil</option>
                        <option>Confirm</option>
                        <option>To be confirmed</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="job_sched_status" class="col-sm-4 control-label">Job Schedule Status</label>
                <div class="col-sm-8">

                    <select class="form-control" name="job_sched_status" id="job_sched_status">
                        <option>Please Select</option>
                        <option>Booked Job</option>
                        <option>Job Completed</option>
                        <option>To be rescheduled</option>
                        <option>Extra work required</option>
                        <option>Quote Required</option>
                        <option>Extra work required</option>
                        <option>Service Call</option>
                        <option>Stock to be ordered</option>
                        <option>Job Cancelled</option>
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label for="est_job_time_sched" class="col-sm-4 control-label">Estimated Job Time Schedule</label>
                <div class="col-sm-8">
                    <select class="form-control" name="est_job_time_sched" id="est_job_time_sched">
                        <option>Please Select</option>
                        <option>7am - 12noon</option>
                        <option>1pm - 4pm</option>
                        <option>Whole Day</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="start" class="col-sm-4 control-label">Schedule Start Date</label>
                <div class="col-sm-8">
                    <div class="form-group">
                        <div class="col-sm-7" style="padding-right: 0">

                            <input type="text" class="form-control startDatePicker" name="start_date" readonly>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control startTimePicker" name="start_time" required>
                        </div>

                    </div>

                </div>
            </div>
            <div class="form-group">
                <label for="end" class="col-sm-4 control-label">Schedule End Date</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control endDateTimePicker" name="end_date">
                </div>
            </div>

        </div>
    </div>
</div> {{--Accordion2--}}

<div id="accordion3" class="accordion blue">
    <div class="accordion-item">
        <div class="accordion-header">
            Extra Job
            <span class="accordion-item-arrow"></span>
        </div>

        <div class="accordion-content">
            <div class="form-group">
                <label for="extra_service_type" class="col-sm-4 control-label">Service Type</label>
                <div class="col-sm-8">
                    <select class="form-control" name="extra_service_type" id="extra_service_type">
                        <option>Please Select</option>
                        <option>Windows Painting</option>
                        <option>Repairs and Maintenance</option>
                        <option>Repairs-Screen</option>
                        <option>New Security Screen</option>
                        <option>Glass Replacement</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="extra_job_description" class="col-sm-4 control-label">Job Description</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="3" name="extra_job_description" id="extra_job_description"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="extra_job_assign_tech" class="col-sm-4 control-label">Assign Technician</label>
                <div class="col-sm-8">
                    <input type="text" name="extra_job_assign_tech" class="form-control" id="extra_job_assign_tech">
                </div>
            </div>

            <div class="form-group">
                <label for="extra_payment_type" class="col-sm-4 control-label">Payment Type</label>
                <div class="col-sm-8">
                    <select class="form-control" name="extra_payment_type" id="extra_payment_type">
                        <option>Please Select</option>
                        <option>Credit Card</option>
                        <option>Cash</option>
                        <option>Cheque</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="extra_payment_status" class="col-sm-4 control-label">Payment Status</label>
                <div class="col-sm-8">
                    <select class="form-control" name="extra_payment_status" id="extra_payment_status">
                        <option>Please Select</option>
                        <option>Paid</option>
                        <option>Dispute Account</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="extra_job_total_payment" class="col-sm-4 control-label">Total Payment</label>
                <div class="col-sm-8">
                    <input type="text" name="extra_job_total_payment" class="form-control" id="extra_job_total_payment">
                </div>
            </div>


        </div>
    </div>
</div> {{--Accordion3--}}

<div id="accordion4" class="accordion blue">
    <div class="accordion-item">
        <div class="accordion-header">
            Service Call
            <span class="accordion-item-arrow"></span>
        </div>

        <div class="accordion-content">
            <div class="form-group">
                <label for="sc_service_type" class="col-sm-4 control-label">Service Type</label>
                <div class="col-sm-8">
                    <select class="form-control" name="sc_service_type" id="sc_service_type">
                        <option>Please Select</option>
                        <option>Windows Painting</option>
                        <option>Repairs and Maintenance</option>
                        <option>Repairs-Screen</option>
                        <option>New Security Screen</option>
                        <option>Glass Replacement</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="sc_job_description" class="col-sm-4 control-label">Job Description</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="3" name="sc_job_description" id="sc_job_description"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="sc_job_fault_tech" class="col-sm-4 control-label">Fault Technician</label>
                <div class="col-sm-8">
                    <input type="text" name="sc_job_fault_tech" class="form-control" id="sc_job_fault_tech">
                </div>
            </div>

            <div class="form-group">
                <label for="sc_job_assign_tech" class="col-sm-4 control-label">Assign Technician</label>
                <div class="col-sm-8">
                    <input type="text" name="sc_job_assign_tech" class="form-control" id="sc_job_assign_tech">
                </div>
            </div>

            <div class="form-group">
                <label for="sc_est_service_charge" class="col-sm-4 control-label">Estimate Service Charge</label>
                <div class="col-sm-8">
                    <input type="text" name="sc_est_service_charge" class="form-control" id="sc_est_service_charge">
                </div>
            </div>

        </div>
    </div>
</div> {{--Accordion4--}}

<div id="accordion5" class="accordion blue">
    <div class="accordion-item">
        <div class="accordion-header">
            Job Site Address
            <span class="accordion-item-arrow"></span>
        </div>

        <div class="accordion-content">
            <div class="form-group">
                <label for="job_site_address" class="col-sm-4 control-label">Address</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="2" name="job_site_address" id="job_site_address"></textarea>

                </div>
            </div>

            <div class="form-group">
                <label for="job_site_suburb" class="col-sm-4 control-label">Suburb</label>
                <div class="col-sm-8">
                    <input type="text" name="job_site_suburb" class="form-control" id="job_site_suburb">
                </div>
            </div>

            <div class="form-group">
                <label for="job_site_postal_code" class="col-sm-4 control-label">Postal Code</label>
                <div class="col-sm-8">
                    <input type="text" name="job_site_postal_code" class="form-control" id="job_site_postal_code">
                </div>
            </div>


            <div class="form-group">
                <label for="job_site_country" class="col-sm-4 control-label">Country</label>
                <div class="col-sm-8">

                    <select class="form-control" name="job_site_country" id="job_site_country">
                        <option>Australia</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div> {{--Accordion5--}}

<div id="accordion6" class="accordion blue">
    <div class="accordion-item">
        <div class="accordion-header">
            Site Contact Details
            <span class="accordion-item-arrow"></span>
        </div>

        <div class="accordion-content">
            <div class="form-group">
                <label for="site_contact_name" class="col-sm-4 control-label">Name</label>
                <div class="col-sm-8">
                    <input type="text" name="site_contact_name" class="form-control" id="site_contact_name">
                </div>
            </div>

            <div class="form-group">
                <label for="site_contact_name" class="col-sm-4 control-label">Job Title</label>
                <div class="col-sm-8">
                    <input type="text" name="site_contact_job_title" class="form-control" id="site_contact_job_title">
                </div>
            </div>

            <div class="form-group">
                <label for="site_contact_phone1" class="col-sm-4 control-label">Phone 1 </label>
                <div class="col-sm-8">
                    <input type="text" name="site_contact_phone1" class="form-control" id="site_contact_phone1">
                </div>
            </div>

            <div class="form-group">
                <label for="site_contact_phone2" class="col-sm-4 control-label">Phone 2 </label>
                <div class="col-sm-8">
                    <input type="text" name="site_contact_phone2" class="form-control" id="site_contact_phone2">
                </div>
            </div>

            <div class="form-group">
                <label for="site_contact_notes" class="col-sm-4 control-label">Notes</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="3" name="site_contact_notes" id="site_contact_notes"></textarea>

                </div>
            </div>
        </div>
    </div>
</div> {{--Accordion6--}}

<div id="accordion7" class="accordion blue">
    <div class="accordion-item">
        <div class="accordion-header">
            Payment
            <span class="accordion-item-arrow"></span>
        </div>

        <div class="accordion-content">

            <div class="form-group">
                <label for="payment_type" class="col-sm-4 control-label">Payment Type</label>
                <div class="col-sm-8">
                    <select class="form-control" name="payment_type" id="payment_type">
                        <option>Please Select</option>
                        <option>Credit Card</option>
                        <option>Cash</option>
                        <option>Cheque</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="payment_status" class="col-sm-4 control-label">Payment Status</label>
                <div class="col-sm-8">
                    <select class="form-control" name="payment_status" id="payment_status">
                        <option>Please Select</option>
                        <option>Initial Deposit</option>
                        <option>Paid</option>
                        <option>Dispute Account</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="payment_estimated_charge" class="col-sm-4 control-label">Estimated Charge </label>
                <div class="col-sm-8">
                    <input type="text" name="payment_estimated_charge" class="form-control" id="payment_estimated_charge">
                </div>
            </div>

            <div class="form-group">
                <label for="payment_actual_charge" class="col-sm-4 control-label">Actual Charge </label>
                <div class="col-sm-8">
                    <input type="text" name="payment_actual_charge" class="form-control" id="payment_actual_charge">
                </div>
            </div>

            <div class="form-group">
                <label for="payment_initial_deposit" class="col-sm-4 control-label">Initial Deposit </label>
                <div class="col-sm-8">
                    <input type="text" name="payment_initial_deposit" class="form-control" id="payment_initial_deposit">
                </div>
            </div>

            <div class="form-group">
                <label for="payment_collectible_amount" class="col-sm-4 control-label">Collectible Amount </label>
                <div class="col-sm-8">
                    <input type="text" name="payment_collectible_amount" class="form-control" id="payment_collectible_amount" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="payment_description" class="col-sm-4 control-label">Payment Description</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="3" name="payment_description" id="payment_description"></textarea>

                </div>
            </div>


        </div>
    </div>
</div> {{--Accordion7--}}



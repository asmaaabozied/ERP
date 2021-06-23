$option_num = 0;


function appendValueRow(input) {
    $langs = $("#translates").val();
    $langs = JSON.parse($langs);
    $number = parseInt($(input).attr('number'));
    $new_number = $number + 1;
    $new_div =
        `<tr id="option-value-row${$new_number}">
        <td class="text-left option-left values-lang-${$new_number}">


        </td>

        <td class="text-right">
        <button type="button" onclick="" data-toggle="tooltip" title="Remove" class="btn btn-danger btn-option">
        <i class="fa fa-minus-circle"></i>
        </button></td>
    </tr>`

    $($new_div).insertAfter("#option-value-row" + $number);

    for ($i = 0; $i < $langs.length; $i++) {
        $this_lang = $langs[$i];
        $(".values-lang-" + $new_number).append(`
        <div class="col-lg-12 input-group mt-2">
            <div class="input-group-prepend">
            <span class="input-group-text">
            ${$this_lang}
            </span>
            </div>
            <input type="text" class="form-control" name="values[${$this_lang}][name][]">
        </div>
    `);
    }
    $(input).attr('number', $new_number);

}

function appendUnitRow(input) {
    $bulkunits_select = $("#bulkunits_select").val();
    $bulk_units = JSON.parse($bulkunits_select);
    $number = parseInt($(input).attr('number'));
    $new_number = $number + 1;
    $new_div =
        ` <tr id="rowbulk-${$new_number}">
    <td class="text-center"></td>
    <td class="text-start option-left" colspan="2">

        <label>bulk_unit</label><select id="bulkunit-${$new_number}" onchange="changePrice(${$new_number})" class="form-control" name="bulkunits[]"></select>
        <label>calculation</label>
        <select id="calculation-${$new_number}" onchange="changePrice(${$new_number})" class="form-control" name="symbols[]">
            <option value="multiply" selected="">*</option>
            <option value="divide">/</option>
        </select>
        <label>quantity</label><input type="number" id="quantity-${$new_number}" onchange="changePrice(${$new_number})" name="quantaties[]" min="1" value="1" style="/* width:100%; */display: inline;" class="form-control required">

        <label>price</label><input type="number" id="price-${$new_number}" name="prices[]" style="width:100%;display: inline;" class="form-control required">
        <label>consumer_price</label><input type="number" name="consumer_prices[]" value="" class="form-control required">

    </td>
    <td colspan="3">
        <label>great_number</label><input type="number" name="great_numbers[]" value="" class="form-control">
        <label>small_numbers</label><input type="number" name="small_numbers[]" value="" class="form-control">
        <label>min_price_sell</label><input type="number" name="min_prices_sell[]" value="" class="form-control">
        <label>order_limits</label><input type="number" name="order_limits[]" value="" class="form-control">
        <label>prices_buy</label><input type="number" name="prices_buy[]" value="" class="form-control">
    </td>
    <td class="text-center">
        <button type="button" onclick="removeUnit(${$new_number})" data-toggle="tooltip" title="Remove" class="btn btn-danger btn-option mt-5">
            <i class="fa fa-minus-circle"></i>
        </button>
    </td>

</tr>`

    $($new_div).insertAfter("#rowbulk-" + $number);

    for ($i = 0; $i < $bulk_units.length; $i++) {
        $this_bulk_unit = $bulk_units[$i];
        $("#bulkunit-" + $new_number).append(`
            <option value="${$this_bulk_unit.id}">${$this_bulk_unit.name}</option>
    `);
    }
    $(input).attr('number', $new_number);

}

function appendOption(input) {
    $input = $(input).val();
    $this_input = JSON.parse($input);
    console.log($this_input);
    $active = '';
    $values_select = $("#values_select").val();
    $values = JSON.parse($values_select);
    $this_values = [];
    for (let x = 0; x < $values.length; x++) {
        if ($this_input.id == $values[x].option_id) {
            $this_values.push($values[x]);
        }

    }
    if ($option_num == 0) {
        $active = "active show"
    }
    $("#options-ul").append(
        `<li class="nav-item" option=${$this_input}>
        <a class="nav-link" id="profile-tab-${$option_num}" data-toggle="tab" href="#option-tab-${$option_num}" aria-controls="profile">
            <span class="nav-icon">
                <i class="fa fa-minus-circle"></i>
            </span>
            <span class="nav-text"> ${$this_input.name}</span>
        </a>
    </li>`
    )
    $("#myTabContent5").append(
        `
                <div class="tab-pane fade ${$active}" id="option-tab-${$option_num}" role="tabpanel" aria-labelledby="home-tab-5">


                <div class="table-responsive">
                    <table id="option-value0" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <td class="text-start">Option Value</td>
                                <td class="text-right">Quantity</td>
                                <td class="text-right">Price</td>

                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="option-value-row-0-0">
                                <td class="text-start">
                                    <select id="values_opion-${$option_num}-0" option=${$this_input.id} onchange="selectValue(${$option_num},0)" class="form-control">
                                        <option selected disabled>select value</option>
                                    </select>
                                <td class="text-right">
                                    <input type="text" id="quantity-${$option_num}-0" value="" placeholder="Quantity" class="form-control"></td>

                                <td class="text-right">

                                    <select name="" class="form-control" style="width: 30%;display: inline;" id="price_prefix-${$option_num}-0">    <option value="+">+</option>    <option value="-">-</option>  </select>

                                    <input type="text" name="" id="price_value-${$option_num}-0" placeholder="Price" class="form-control"style="width: 67%;display: inline;"></td>

                                <td class="text-start">
                                    <button type="button" disabled data-toggle="tooltip" rel="tooltip" title="" class="btn btn-danger btn-option" data-original-title="Remove">
                                    <i class="fa fa-minus-circle"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3"></td>
                                <td class="text-start" id="td-inc-${$option_num}">

                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>`);

    if ($this_values.length <= 1) {
        $("#td-inc-" + $option_num).append(`<button disabled type="button" data-toggle="tooltip" title="" class="btn btn-primary btn-option" data-original-title="Add Option Value" id="inc-btn-${$this_input.id}" onclick="addValue(0,${$this_input.id},${$option_num},${$values.length})">
                <i class="fa fa-plus-circle"></i>
                </button>`);
    } else {
        $("#td-inc-" + $option_num).append(`<button type="button" data-toggle="tooltip" title="" class="btn btn-primary btn-option" data-original-title="Add Option Value" id="inc-btn-${$this_input.id}" onclick="addValue(0,${$this_input.id},${$option_num},${$values.length})">
                <i class="fa fa-plus-circle"></i>
                </button>`);
    }

    for (let v = 0; v < $this_values.length; v++) {
        $value_id = $this_values[v].id;
        $value_name = $this_values[v].name;
        $("#values_opion-" + $option_num + "-0").append(`
                    <option value=${$value_id}>${$value_name}</option>
                `);
    }

    window.$option_num = $option_num + 1;
}


function selectValue($option_number, $value_number) {
    $value = $("#values_opion-" + $option_number + "-" + $value_number).val();
    $option = $("#values_opion-" + $option_number + "-" + $value_number).attr('option');
    $("#quantity-" + $option_number + "-" + $value_number).attr('name', 'options[' + $option + '][values][' + $value + '][stock]');
    $("#price_prefix-" + $option_number + "-" + $value_number).attr('name', 'options[' + $option + '][values][' + $value + '][price_prefix]');
    $("#price_value-" + $option_number + "-" + $value_number).attr('name', 'options[' + $option + '][values][' + $value + '][price]');


}

function addValue($number, $option_id, $option_num, $value_length) {
    $values_select = $("#values_select").val();
    $values = JSON.parse($values_select);
    $this_values = [];
    for (let x = 0; x < $values.length; x++) {
        if ($this_input.id == $values[x].option_id) {
            $this_values.push($values[x]);
        }

    }
    $number = parseInt($number);
    $new_number = parseInt($number) + 1;
    $(
        `<tr id="option-value-row-${$option_num}-${$new_number}">
        <td class="text-start">
            <select id="values_opion-${$option_num}-${$new_number}" option=${$option_id} onchange="selectValue(${$option_num},0)" class="form-control">
                <option  selected disabled>select value</option>
            </select>
        <td class="text-right">
            <input type="text" id="quantity-${$option_num}-${$new_number}" value="" placeholder="Quantity" class="form-control"></td>

        <td class="text-right">

            <select name="" class="form-control" style="width: 30%;display: inline;" id="price_prefix-${$option_num}-${$new_number}">    <option value="+">+</option>    <option value="-">-</option>  </select>

            <input type="text" name="" id="price_value-${$option_num}-${$new_number}" placeholder="Price" class="form-control"style="width: 67%;display: inline;"></td>

        <td class="text-start">
            <button type="button" onclick="removeOptionValue(${$option_num},${$new_number})" data-toggle="tooltip" rel="tooltip" title="" class="btn btn-danger btn-option" data-original-title="Remove">
            <i class="fa fa-minus-circle"></i>
            </button>
        </td>
    </tr>`
    ).insertAfter("#option-value-row-" + $option_num + "-" + $number)
    $("#inc-btn-" + $option_id).remove();
    if ($value_length > $new_number + 1) {
        $("#td-inc-" + $option_num).append(`<button type="button" data-toggle="tooltip" title=""  class="btn btn-primary btn-option" data-original-title="Add Option Value" id="inc-btn-${$option_id}" onclick="addValue(${$new_number},${$option_id},${$option_num},${$value_length})">
        <i class="fa fa-plus-circle"></i>
        </button>`)
    } else {
        $("#td-inc-" + $option_num).append(`<button type="button" disabled data-toggle="tooltip" title="" class="btn btn-primary btn-option" data-original-title="Add Option Value" id="inc-btn-${$option_id}" onclick="addValue(${$new_number},${$option_id},${$option_num},${$value_length})">
        <i class="fa fa-plus-circle"></i>
        </button>`)
    }
    for (let v = 0; v < $this_values.length; v++) {
        $value_id = $this_values[v].id;
        $value_name = $this_values[v].name;
        $("#values_opion-" + $option_num + "-" + $new_number).append(`
            <option value=${$value_id}>${$value_name}</option>
        `);
    }
}

function changePrice($num) {
    if ($("#calculation-" + $num).val() == "multiply") {
        $total_price = parseInt($("#quantity-" + $num).val()) * parseFloat($("#inputprice").val());
        $("#price-" + $num).attr('value', $total_price);
    }

    if ($("#calculation-" + $num).val() == "divide") {
        $total_price = parseFloat($("#inputprice").val()) / parseInt($("#quantity-" + $num).val());
        $("#price-" + $num).attr('value', $total_price);
    }

}


function removeUnit($number){
    $("#rowbulk-"+$number).remove();
}
function removeOptionValue($option_number,$number){
    $("#option-value-row-"+$option_number+"-"+$number).remove();
}

function changeRelative($num){
    $relative_value = $("#select_relative-"+$num).val();
    $splited_value = $relative_value.split("-");
    $product_id = $splited_value[0];
    $price = $splited_value[1];
    $cost_price = $splited_value[2];
    $stock = $splited_value[3];
    
    $("#cost-price-"+$num).attr('name','cost_prices['+$product_id+']');
    $("#sell-price-"+$num).attr('name','sell_prices['+$product_id+']');
    $("#stock-"+$num).attr('name','stocks['+$product_id+']');
    $("#twosides-"+$num).attr('name','twosides-['+$product_id+']');

    $("#cost-price-"+$num).attr('value',$cost_price);
    $("#sell-price-"+$num).attr('value',$price);
    $("#stock-"+$num).attr('value',$stock);

}

function appendRelative(){

}
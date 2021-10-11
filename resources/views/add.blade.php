<h1>Add Product</h1>
@include("navbar")


@if(session('product'))
    <h3 style="color:rgb(34, 192, 34)">{{ session('product') }} has saved in Product List . Please enter another product</h3>
@endif


<form action="add" method="POST">
    @csrf

    <table>
        <tr>
            <td><label for="p_name">Product name : </label><br></td>
            <td><input  type="text" name="p_name" id="p_name"><br>
                <span style="color:red">
                @error('p_name')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="p_code">Product code : </label><br></td>
            <td><input  type="text" name="p_code" id="p_code"><br>
                <span style="color:red">
                @error('p_code')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="p_desc">Product description : </label><br></td>
            <td><input type="p_desc" name="p_desc" id="p_desc"><br>
                <span style="color:red">
                @error('p_desc')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="p_category">Product category : </label><br></td>
            <td><input type="p_category" name="p_category" id="p_category"><br>
                <span style="color:red">
                @error('p_category')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="p_price">Product price : </label><br></td>
            <td><input type="p_price" name="p_price" id="p_price"><br>
                <span style="color:red">
                @error('p_price')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="p_quantity">Product quantity : </label><br></td>
            <td><input type="p_quantity" name="p_quantity" id="p_quantity"><br>
                <span style="color:red">
                @error('p_quantity')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="p_stock_date">Product stock date : </label><br></td>
            <td><input type="p_stock_date" name="p_stock_date" id="p_stock_date"><br>
                <span style="color:red">
                @error('p_stock_date')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="p_rating">Product rating : </label><br></td>
            <td><input type="p_rating" name="p_rating" id="p_rating"><br>
                <span style="color:red">
                @error('p_rating')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td><label for="p_purchased">Product purchased : </label><br></td>
            <td><input type="p_purchased" name="p_purchased" id="p_purchased"><br>
                <span style="color:red">
                @error('p_purchased')
                    {{ $message }}
                @enderror
                </span><br>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="add_bt" value="add" id="add_bt"></td>
        </tr>


    </table>

</form>

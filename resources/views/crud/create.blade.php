<div class="alert alert-danger">
    <ul>
        <li v-show="!validation.name">Name field is required</li>
        <li v-show="!validation.email">Input a valid email address</li>
        <li v-show="!validation.crud_level">Crud Level is required</li>
    </ul>
</div>

<form action="#" @submit.prevent="AddNewRecord" method="POST">

    <div class="form-group">
        <label for="name">Name</label>
        <input v-model="newRecord.name" type="text" name="name" id="name" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input v-model="newRecord.email" type="text" name="email" id="email" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="crud_level">Crud Level</label>
        <select name="crud_level" id="crud_level" v-model="newRecord.crud_level" class="form-control">
            <option value="">Select a Level</option>
            <option value="1">Sees Sunlight</option>
            <option value="2">Foosball Fanatic</option>
            <option value="3">Basement Dweller</option>
        </select>
    </div>

    <div class="form-group">
        <button :disabled="!isValid" class="btn btn-default" type="submit" v-if="!edit">Add New Crud
        </button>

        <button :disabled="!isValid" class="btn btn-default" type="submit" v-if="edit" @click="
                EditRecord(newRecord.id)">Edit Crud</button>
    </div>


</form>
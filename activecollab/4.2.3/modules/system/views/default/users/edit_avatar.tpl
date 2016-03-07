{title}Update avatar{/title}
{add_bread_crumb}Update avatar{/add_bread_crumb}

<div id="edit_icon">
  <form method="POST" action="{$active_user->getEditAvatarUrl()}" enctype="multipart/form-data">
    <div class="blockLabels">
	    <div class="fields_wrapper">
	      {if file_exists($active_user->getAvatarPath(true))}
	        <div class="current_avatar">
	          <div id="updated_icon">
	            <img src="{$active_user->avatar()->getUrl(IUserAvatarImplementation::SIZE_BIG)}" alt="" />
	          </div>
	          {assign_var name=request_type}{if $request->isAsyncCall()}get{else}post{/if}{/assign_var}
	          <p class="details">{link href=$active_user->getDeleteAvatarUrl()  class='delete_current' method=$request_type}Delete Current Avatar{/link}</p>
	        </div>
	      {/if}
	      
	      {wrap field=avatar}
	        {label for=userAvatar}New Avatar{/label}
	        {file_field name=avatar id=userAvatar}
	      {/wrap}
      </div>
      
      {wrap_buttons}
      	{submit}Save Changes{/submit}
      {/wrap_buttons}
      <input type="hidden" style="display: none;" value="submitted" name="submitted"/>
    </div>
  </form>
</div>
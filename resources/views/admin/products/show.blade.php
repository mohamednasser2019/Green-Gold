
<div class="col-sm-5 col-md-4">
                          <div class="user-left">
                            <div class="center">
                              <h4>{{ $data->name }}</h4>
                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="user-image">
                                  <div class="fileupload-new thumbnail"><img src="{{ asset('public/uploads/avatars/'.$data->avatar) }}" alt="">
                                  </div>
                                  <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                  <div class="user-image-buttons">
                                
                                 
                                  </div>
                                </div>
                              </div>
                 
                            </div>
                            <div class="col-lg-8">
                            <table class="table table-condensed table-hover">
                              <thead>
                                <tr>
                                  <th colspan="3">Member Information</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>ID</td>
                                  <td>
                                  <a >
                                    {{ $data->id }}
                                  </a></td>
                                  <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                </tr>
                                <tr>
                                  <td>Category</td>
                                  <td>
                                  <a >
                                    {{ $data->getCategory->name }}
                                  </a></td>
                                  <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                </tr>
                                <tr>
                                  <td>Member Bio</td>
                                  <td>{{ $data->bio }}</td>
                                  <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                </tr>
                                
                              </tbody>
                            </table>
                            </div>
                          </div>
                        </div>
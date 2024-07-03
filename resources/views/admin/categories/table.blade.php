                  <div class="card-body">
                    <table
                      id="example1"
                      class="table table-bordered table-striped"
                    >
                      <thead>
                        <tr>
                          <th class="table_title">Tiêu đề</th>
                          <th>Loại</th>
                          <th>Đăng bởi</th>
                          <th>Trạng thái</th>
                          <th>Ảnh chính</th>
                          <th>Ngày đăng</th>      
                          <th>Giờ đăng</th>                    
                          <th>Thực hiện</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($post as $post )
                        <tr>
                            <td class="table_title">{{$post->title}}</td>
                            <td>{{$post->post_type}}</td>
                            <td>{{$post->name}} ({{$post->usertype}})</td>
                            <td>{{$post->post_status}}</td>
                            <td>
                                <img class="img_deg" src="postimage/{{$post->main_image}}" alt="">
                            </td>
                            <td>{{$post->created_at->format('d/m/Y')}}</td>
                            <td>{{$post->created_at->format('H:i:s')}}</td>                            
                            <td>
                              @if (Auth::check() && Auth::user()->usertype == 'admin')
                                @if ($post->post_status == 'Chờ phê duyệt')
                                <div class="d-block text-center">
                                    <a href="{{ url('view_post', $post->id) }}" class="btn btn-primary w-25">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{ url('accept_post', $post->id) }}" class="btn btn-success w-25">
                                        <i class="fa-solid fa-check"></i>
                                    </a>
                                    <a href="{{ url('reject_post', $post->id) }}" class="btn btn-danger w-25" 
                                    onclick="confirmation_Reject(event)">
                                        <i class="fa-solid fa-ban"></i>
                                    </a>
                                </div>                                
                                @else
                                <div class="d-block text-center">
                                    <a href="{{ url('view_post', $post->id) }}" class="btn btn-primary w-25">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    @if ($post->post_type == 'Khách sạn' || $post->post_type == 'Homestay')
                                      <a href="{{ url('edit_location_page', $post->id) }}" class="btn btn-success w-25">
                                          <i class="fa-solid fa-pen-to-square"></i>
                                      </a>
                                    @else
                                      <a href="{{ url('edit_page', $post->id) }}" class="btn btn-success w-25">
                                          <i class="fa-solid fa-pen-to-square"></i>
                                      </a>
                                    @endif
                                    
                                    <a href="{{ url('delete_post', $post->id) }}" class="btn btn-danger w-25" 
                                    onclick="confirmation(event)">
                                    <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                                @endif
                              @elseif (Auth::check() && Auth::user()->usertype == 'user')
                                <div class="d-block text-center">
                                    <a href="{{ url('view_post', $post->id) }}" class="btn btn-primary w-25">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    @if ($post->post_type == 'Khách sạn' || $post->post_type == 'Homestay')
                                      <a href="{{ url('edit_location_page', $post->id) }}" class="btn btn-success w-25">
                                          <i class="fa-solid fa-pen-to-square"></i>
                                      </a>
                                    @else
                                      <a href="{{ url('edit_page', $post->id) }}" class="btn btn-success w-25">
                                          <i class="fa-solid fa-pen-to-square"></i>
                                      </a>
                                    @endif
                                </div>            
                              @endif
                            </td>
                        </tr>                
                        @endforeach
                      </tbody>
                    </table>
                  </div>
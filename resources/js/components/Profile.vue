<template>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" :src="'./img/users/' + form.data[0].photo"
                                    :alt="avatar_alt">
                            </div>

                            <h3 class="profile-username text-center">{{ form.data[0].name }}</h3>

                            <p class="text-muted text-center">{{ form.data[0].job }}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Followers</b> <a class="float-right">1,322</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Following</b> <a class="float-right">543</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Friends</b> <a class="float-right">13,287</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fa fa-book mr-1"></i> Education</strong>

                            <p class="text-muted">
                                {{ form.data[0].education }}
                            </p>

                            <hr>

                            <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                            <p class="text-muted">{{ form.data[0].location }}</p>

                            <hr>

                            <strong><i class="fa fa-pencil mr-1"></i> Skills</strong>

                            <p class="text-muted">
                                {{ form.data[0].skills }}
                            </p>

                            <hr>

                            <strong><i class="fa fa-file-text-o mr-1"></i> Notes</strong>

                            <p class="text-muted">{{ form.data[0].notes }}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" :src="'./img/' + avatar" :alt="avatar_alt">
                                            <span class="username">
                                                <a href="#">Jonathan Burke Jr.</a>
                                                <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                                            </span>
                                            <span class="description">Shared publicly - 7:30 PM today</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            Lorem ipsum represents a long-held tradition for designers,
                                            typographers and the like. Some people hate it and argue for
                                            its demise, but others ignore the hate as they create awesome
                                            tools to help create filler text for everyone from bacon lovers
                                            to Charlie Sheen fans.
                                        </p>

                                        <p>
                                            <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i>
                                                Share</a>
                                            <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i>
                                                Like</a>
                                            <span class="float-right">
                                                <a href="#" class="link-black text-sm">
                                                    <i class="fa fa-comments-o mr-1"></i> Comments (5)
                                                </a>
                                            </span>
                                        </p>

                                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                    </div>
                                    <!-- /.post -->

                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" :src="'./img/' + avatar" :alt="avatar_alt">
                                            <span class="username">
                                                <a href="#">Adam Jones</a>
                                                <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                                            </span>
                                            <span class="description">Posted 5 photos - 5 days ago</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <img class="img-fluid" :src="'./img/photo1.png'" :alt="avatar_alt">
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img class="img-fluid mb-3" :src="'./img/photo2.png'" :alt="avatar_alt">
                                                        <img class="img-fluid" :src="'./img/photo3.jpg'" :alt="avatar_alt">
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-sm-6">
                                                        <img class="img-fluid mb-3" :src="'./img/photo4.jpg'" :alt="avatar_alt">
                                                        <img class="img-fluid" :src="'./img/photo1.png'" :alt="avatar_alt">
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->

                                        <p>
                                            <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i>
                                                Share</a>
                                            <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i>
                                                Like</a>
                                            <span class="float-right">
                                                <a href="#" class="link-black text-sm">
                                                    <i class="fa fa-comments-o mr-1"></i> Comments (5)
                                                </a>
                                            </span>
                                        </p>

                                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                    </div>
                                    <!-- /.post -->
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <ul class="timeline timeline-inverse">
                                        <!-- timeline time label -->
                                        <li class="time-label">
                                            <span class="bg-danger">
                                                10 Feb. 2014
                                            </span>
                                        </li>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <li>
                                            <i class="fa fa-envelope bg-primary"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an
                                                    email</h3>

                                                <div class="timeline-body">
                                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                    quora plaxo ideeli hulu weebly balihoo...
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <li>
                                            <i class="fa fa-user bg-info"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                                <h3 class="timeline-header no-border"><a href="#">Sarah Young</a>
                                                    accepted your friend request
                                                </h3>
                                            </div>
                                        </li>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <li>
                                            <i class="fa fa-comments bg-warning"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your
                                                    post</h3>

                                                <div class="timeline-body">
                                                    Take me to your leader!
                                                    Switzerland is small and neutral!
                                                    We are more like Germany, ambitious and misunderstood!
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- END timeline item -->
                                        <!-- timeline time label -->
                                        <li class="time-label">
                                            <span class="bg-success">
                                                3 Jan. 2014
                                            </span>
                                        </li>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <li>
                                            <i class="fa fa-camera bg-purple"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new
                                                    photos</h3>

                                                <div class="timeline-body">
                                                    <img :src="'/img/' + avatar" :alt="avatar" class="margin">
                                                    <img :src="'./img/' + avatar" :alt="avatar_alt" class="margin">
                                                    <img :src="'./img/' + avatar" :alt="avatar_alt" class="margin">
                                                    <img :src="'./img/' + avatar" :alt="avatar_alt" class="margin">
                                                </div>
                                            </div>
                                        </li>
                                        <!-- END timeline item -->
                                        <li>
                                            <i class="fa fa-clock-o bg-gray"></i>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <form @submit.prevent="updateProfile" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Name"
                                                v-model="form.data[0].name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-sm-2 control-label">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Email"
                                                v-model="form.data[0].email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-sm-2 control-label">Password</label>
                                            <input type="password" class="form-control" id="password" placeholder="Password"
                                                v-model="form.data[0].password">
                                        </div>
                                        <div class="form-group">
                                            <label for="education" class="col-sm-2 control-label">Education</label>
                                            <input type="text" class="form-control" id="education" placeholder="Experience"
                                                v-model="form.data[0].education">
                                        </div>
                                        <div class="form-group">
                                            <label for="bio" class="col-sm-2 control-label">Biography</label>
                                            <textarea type="text" class="form-control" id="bio" placeholder="Biography"
                                                v-model="form.data[0].bio"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="notes" class="col-sm-2 control-label">Notes</label>
                                            <textarea type="text" class="form-control" id="notes" placeholder="Notes"
                                                v-model="form.data[0].notes"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="location" class="col-sm-2 control-label">Location</label>
                                            <input class="form-control" id="location" placeholder="Location" v-model="form.data[0].location">
                                        </div>
                                        <div class="form-group">
                                            <label for="skills" class="col-sm-2 control-label">Skills</label>
                                            <input type="text" class="form-control" id="skills" placeholder="Skills" v-model="form.data[0].skills">
                                        </div>
                                        <div class="form-group">
                                            <label for="user-pic">Profile Picture</label><br>
                                            <input type="file" class="form-input" id="user-pic" placeholder="Choose Profile Picture" @change="prepareImage">
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</template>

<script>
export default {
  data() {
    return {
      avatar: "avatar.png",
      avatar_alt: "avatar.png",
      form: new Form({
        id: "",
        name: "",
        email: "",
        password: "",
        type: "",
        bio: "",
        education: "",
        location: "",
        notes: "",
        skills: "",
        photo: "",
        created_at: ""
      })
    };
  },
  mounted() {
    // console.log("Component mounted.");
  },
  methods: {
    prepareImage(element) {
      let file = element.target.files[0];
      console.log(file);
      let reader = new FileReader();
      reader.onloadend = fileel => {
        this.form.data[0].photo = reader.result;
      };
      reader.readAsDataURL(file);
    },
    updateProfile() {
      axios.put('./api/profile').then((result) => {
        console.log(result.data);
      }).catch((err) => {
        
      });
    }
  },

  created() {
    axios.get("api/users").then(({ data }) => (this.form = data));
  }
};
</script>

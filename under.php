<?php include 'header.php'; ?>
<title>Appendix C: Under the Hood - A Look at What's Happening Under the Surface</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">Appendix C: Under the Hood</div>
The purpose of this chapter is to give the reader a quick look and basic idea of what's going on beneath the surface of the openSUSE GNU/Linux operating system.<br /><br />



<div class="heading2">C.1 Main System Components</div>
Any modern computer operating system is a very large and complicated contraption - and GNU/Linux distributions are no exception. The Linux kernel is just one of many components. The figure below shows the core components and what their respective roles are.<br /><br />

<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
        <tbody>
        <tr>
        <td style="width: 50%;"><center><a href="images/pics/distro.png" rel="thumbnail"><img src="images/pics/distrob.png" alt="distro" class="pic" /></a></center><br /></td>
        </tr>
        <tr>
        <td class="image-caption">This figure shows the main components of a GNU/Linux operating system.</td>
        </tr>
        </tbody>
</table>



<div class="heading2">C.2 File Tree</div>
Most users will hardly ever need to work outside their home folder, but nevertheless it's probably a good idea to have a basic idea about the how the file hierarchy works.<br /><br />

On GNU/Linux you only have <i>one</i> file tree, unlike e.g. Microsoft Windows which has a different file tree for each filesystem/partition - on GNU/Linux separate filesystems/partitions are <i>mounted</i> in folders within a single file tree. The root folder for the file tree is "<b>/</b>" and paths are written using forward slashes.<br /><br />

So a path might look like this in GNU/Linux:<br />
<b>/home/<i>username</i>/Desktop/</b><br /><br />

In MS Windows a comparable path might look like this:<br />
<b>C:\Documents and Settings\<i>username</i>\Desktop</b><br /><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>In GNU/Linux filenames and folders are <b>case sensitive</b>.</td>
</tr>
</tbody>
</table>
</div><br />

The root folder ("/") contains these folders by default:<br /><br />

<table class="table">
<tbody>
  <tr>
    <td style="width: 95px;"><b>/bin/</b></td>
    <td>Essential tools and other programs (or binaries)</td>
  </tr>
  <tr class="d1">
    <td style="width: 95px;"><b>/boot/</b></td>
    <td>The kernel itself, bootloader configuration, etc.</td>
  </tr>
  <tr>
    <td style="width: 95px;"><b>/dev/</b></td>
    <td>Device files representing the various hardware</td>
  </tr>
  <tr class="d1">
    <td style="width: 95px;"><b>/etc/</b></td>
    <td>System configuration files</td>
  </tr>
  <tr>
    <td style="width: 95px;"><b>/home/</b></td>
    <td>Home folders of the regular users</td>
  </tr>
  <tr class="d1">
    <td style="width: 95px;"><b>/lib/</b></td>
    <td>System library files</td>
  </tr>
  <tr>
    <td style="width: 95px;"><b>/media/</b></td>
    <td>Legacy mount point for removable media</td>
  </tr>
  <tr class="d1">
    <td style="width: 95px;"><b>/mnt/</b></td>
    <td>Intended for temporary mount points</td>
  </tr>
  <tr>
    <td style="width: 95px;"><b>/opt/</b></td>
    <td>Add-on application files</td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/proc/</b></td>
      <td>Files that give information about current system processes</td>
  </tr>
  <tr>
      <td style="width: 95px;"><b>/root/</b></td>
      <td>The superuser's home directory</td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/sbin/</b></td>
      <td>Essential system administrator tools, or system binaries</td>
  </tr>
  <tr>
      <td style="width: 95px;"><b>/selinux/</b></td>
      <td>Only relevant if you're using SELinux, which you probably won't be</td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/srv/</b></td>
      <td>Data for servers ran on the system</td>
  </tr>
  <tr>
      <td style="width: 95px;"><b>/sys/</b></td>
      <td>Virtual file system</td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/tmp/</b></td>
      <td>Temporary files</td>
  </tr>
  <tr>
      <td style="width: 95px;"><b>/usr/</b></td>
      <td>Short for UNIX System Resources, e.g. all applications are installed here</td>
  </tr>
  <tr class="d1">
      <td style="width: 95px;"><b>/var/</b></td>
      <td>Variable data</td>
  </tr>
</tbody>
</table><br />

Normal users only have write permission in their <b>/home/</b> folder, and rarely have any need to work outside of that.<br /><br />



<div class="heading2">C.3 Permissions</div>
Coming soon...<br /><br />



<div class="heading2">C.4 Mounting and Removable Media</div>
As briefly mentioned above filesystems/partitions are <i>mounted</i> in folders within a single file tree, this means that e.g. "<b>/</b>" can be on one partition or physical disk and <b>/var/</b> can be on a different one, while <b>/home/<i>username</i>/data/</b> might physically be on a third one - but they all appear in the same single file tree when navigating the file hierarchy.<br /><br />

You can assign mount points to internal partitions/filesystems to have them mounted durning boot using YaST Partitioner or by manually editing the configuration file /etc/fstab.<br /><br />

When removable media such as CDs or USB keys are plugged in a notification will appear, and the devices will appear in the left panel of the Dolphin file manager. The media will be mounted in <b>/var/run/media/</b>.<br /><br />



<div class="heading2">C.5 Hidden Files</div>
Files and folders starting with '.' (dot) are hidden. You can make them visible in Dolphin file manager via the keyboard shortcut <b>Alt+.</b> or <b>View -&gt; Show Hidden Files</b> in the menubar.<br /><br />

Applications store the user settings and data in hidden folders in the users home folder, e.g. <b>/home/<i>username</i>/.mozilla/</b>, <b>/home/<i>username</i>/.config/vlc/</b>, <b>/home/<i>username</i>/.kde4/share/config/</b> etc. If you uninstall an application the settings and data will remain in the home folder. To "reset" an application, you just rename or (re)move the settings and/or data hidden in your home folder.<br /><br />



<div class="heading2">C.6 Important Config Files</div>
In GNU/Linux configurations and settings are usually stored in human-readable plain text files. Almost any configuration can be done graphically via YaST or various other GUI applications, but nevertheless it can be useful to know the location of some key config files.<br /><br />

System wide configurations are mainly stored in <b>/etc/</b>, user settings are stored in hidden files in the home folder for the individual user.<br /><br />

<table class="table">
<tbody>
    <tr>
    <td style="width: 230px;"><b>/etc/fstab</b></td>
    <td>The file system table, file systems/partitions mounted during boot.</td>
    </tr>
    <tr class="d1">
    <td style="width: 230px;"><b>/etc/sysconfig/yast2</b></td>
    <td>Configuration for YaST.</td>
    </tr>
    <tr>
    <td style="width: 230px;"><b>/etc/zypp/zypp.conf</b></td>
    <td>Configuration for the software management.</td>
    </tr>
    <tr class="d1">
    <td style="width: 230px;"><b>/etc/samba/smb.conf</b></td>
    <td>Samba configuration ("Windows Network")</td>
    </tr>
    <tr>
    <td style="width: 230px;"><b>/etc/HOSTNAME</b></td>
    <td>The hostname for the machine.</td>
    </tr>
    <tr class="d1">
    <td style="width: 230px;"><b>/etc/X11/xorg.conf.d/</b></td>
    <td>X-server configuration files. By default autodetection is used, edit these files if you must configure the X-server.</td>
    </tr>
    <tr>
    <td style="width: 230px;"><b>/etc/sysconfig/kernel</b></td>
    <td>The kernel. For example loading extra modules during boot.</td>
    </tr>
    <tr class="d1">
    <td style="width: 230px;"><b>/etc/modprobe.d/50-blacklist.conf</b></td>
    <td>Blacklisting kernel modules.</td>
    </tr>
    </tbody>
</table><br />



<div class="heading2">C.7 Logs</div>
In case of problems it's good to know the location of the main log files, most are kept in <b>/var/log/</b>.<br /><br />

<table class="table">
<tbody>
  <tr>
      <td style="width: 230px;"><b>/var/log/Xorg.0.log</b></td>
      <td>Log for the X-server.</td>
  </tr>
  <tr class="d1">
      <td style="width: 230px;"><b>/home/<i>username</i>/.xsession-errors</b></td>
      <td>Useful for troubleshooting applications ran as normal user.</td>
  </tr>
  <tr>
      <td style="width: 230px;"><b>/var/log/NetworkManager</b></td>
      <td>The NetworkManager system (generally only used on laptops).</td>
  </tr>
  <tr class="d1">
      <td style="width: 230px;"><b>/var/log/boot.msg</b></td>
      <td>Boot log.</td>
  </tr>
  <tr>
      <td style="width: 230px;"><b>/var/log/messages</b></td>
      <td>General system log</td>
  </tr>
  <tr class="d1">
      <td style="width: 230px;"><b>/var/log/YaST2/</b></td>
      <td>Log files for various YaST modules and components.</td>
  </tr>
  </tbody>
</table><br />



<div class="heading2">C.8 Troubleshooting</div>
Here are some basic troubleshooting tips for GNU/Linux in case an application crashes or won't start at all.

<ul>
<li>If an application fails, try running it from a terminal to get more/better output</li>
<li>Try removing/renaming the hidden folder(s) for the application in the users home folder</li>
<li>Try creating a new user and see if the problem persists. If the problem does not persist for a new user, the cause can probably be found in the settings/data in the home folder of the user with the problem</li>
<li>Check out relevant log files</li>
</ul>

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>Reinstalling the software packages almost never solves anything, because the old settings and data will remain in hidden folders in the home folder.</td>
</tr>
</tbody>
</table>
</div><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="games.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="history.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>

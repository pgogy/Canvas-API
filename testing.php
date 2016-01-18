<?PHP
	
	require "Psr4AutoloaderClass.php";

	$API = new InstructureCanvasAPI\InstructureCanvasAPI( 
																array(
																	"site" => "https://umw.instructure.com",
																	"token" => "8~tuivUvM3GFS3UuGWSSledw0YcR1btI97KlPCgnoZ7g47tynNY0KPNv8rwBNTlypl",
																	"webService" => "CURL"
																)
															);
	
	/*
	$users = new InstructureCanvasAPI\Users\Users();
	$users->setAPI($API);
	$users->getUsersForAccount(3810626);
	
	$courses = new InstructureCanvasAPI\Courses\Courses();
	$courses->setAPI($API);
	$courses->getCoursesForThisUser();
	$courses->getCoursesForThisUserWithSyllabus();
	
	$assignments = new InstructureCanvasAPI\Courses\ActivityStreams\ActivityStreams(); 
	$assignments->setAPI($API);
	$assignments->setCourseID(1001890);
	$assignments->getActivityStream();
	
	$pages = new InstructureCanvasAPI\Courses\Pages\Pages(); 
	$pages->setAPI($API);
	$pages->setCourseID(1001890);
	$pages->getPages();
	*/
	$users = new InstructureCanvasAPI\Courses\Users\Users(); 
	$users->setAPI($API);
	$users->setCourseID(1001890);
	$users->getUsers();
	/*
	$pages = new InstructureCanvasAPI\Courses\Pages\Pages(); 
	$pages->setAPI($API);
	$pages->setCourseID(1001890);
	$pages->getPage("lesson-1-commentary-the-europeans-the-quest-for-a-route-to-asia");
	
	$modules = new InstructureCanvasAPI\Courses\Modules\Modules(); 
	$modules->setAPI($API);
	$modules->setCourseID(1001890);
	$modules->getModules();
	
	$modules = new InstructureCanvasAPI\Courses\Modules\Modules(); 
	$modules->setAPI($API);
	$modules->setCourseID(1001890);
	$modules->getModule(1127757);
	
	$modules = new InstructureCanvasAPI\Courses\Modules\Modules(); 
	$modules->setAPI($API);
	$modules->setCourseID(1001890);
	$modules->getModuleItems(1127757);
	
	$modules = new InstructureCanvasAPI\Courses\Modules\Modules(); 
	$modules->setAPI($API);
	$modules->setCourseID(1001890);
	$modules->getModuleItem(1127757,8237167);
	
	$todo = new InstructureCanvasAPI\Courses\ToDo\ToDo(); 
	$todo->setAPI($API);
	$todo->setCourseID(1001890);
	$todo->getToDo();
	
	$todo = new InstructureCanvasAPI\Courses\ToDo\ToDo(); 
	$todo->setAPI($API);
	$todo->setCourseID(1001890);
	$todo->getToDo(); 
	
	$preview = new InstructureCanvasAPI\Courses\PreviewHTML\PreviewHTML(); 
	$preview->setAPI($API);
	$preview->setCourseID(1001890);
	$preview->getPreviewHTML();
	
	$topics = new InstructureCanvasAPI\Courses\DiscussionTopics\DiscussionTopics(); 
	$topics->setAPI($API);
	$topics->setCourseID(1001890);
	$topics->getDiscussionTopics();
	
	$pages = new InstructureCanvasAPI\Courses\FrontPage\FrontPage(); 
	$pages->setAPI($API);
	$pages->setCourseID(1001890);
	$pages->getFrontPage();
	
	$sections = new InstructureCanvasAPI\Courses\Sections\Sections(); 
	$sections->setAPI($API);
	$sections->setCourseID(1001890);
	$sections->getSections();
	
	$quizzes = new InstructureCanvasAPI\Courses\Quizzes\Quizzes(); 
	$quizzes->setAPI($API);
	$quizzes->setCourseID(1001890);
	$quizzes->getQuizzes();
	
	$quizzes = new InstructureCanvasAPI\Courses\Quizzes\Quizzes(); 
	$quizzes->setAPI($API);
	$quizzes->setCourseID(1001890);
	$quizzes->getQuizQuestions(1190954);
	
	$folders = new InstructureCanvasAPI\Courses\Folders\Folders(); 
	$folders->setAPI($API);
	$folders->setCourseID(1001890);
	$folders->getFolders(); 
	
	$files = new InstructureCanvasAPI\Courses\Files\Files(); 
	$files->setAPI($API);
	$files->setCourseID(1001890);
	$files->getFiles(); 
	
	$files = new InstructureCanvasAPI\Courses\Files\Files(); 
	$files->setAPI($API);
	$files->setCourseID(1001890);
	$files->getFile(41662426);*/
	
	
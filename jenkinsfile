pipeline {
    agent any
    
    environment {
        DOCKER_REGISTRY = 'localhost:5000'
        IMAGE_NAME = 'ride-sharing-app'
    }
    
    stages {
        stage('Checkout') {
            steps {
                echo "Checkout stage running"
                git branch: 'main', url: 'https://github.com/Leoncie2/leoncie.git'
            }
        }
        
        stage('Build') {
            steps {
                echo "Build stage running"
                sh 'docker-compose build'
            }
        }
        
        stage('Test') {
            steps {
                echo "Test stage running"
                sh '''
                    docker-compose up -d
                    sleep 30
                    curl -f http://localhost:8080 || exit 1
                '''
            }
        }
        
        stage('Deploy') {
            steps {
                echo "Deploy stage running"
                sh 'docker-compose up -d'
            }
        }
        
        stage('Integration Test') {
            steps {
                echo "Integration Test stage running"
                sh '''
                    # Test if web service is responding
                    curl -f http://localhost:8080 || exit 1
                    
                    # Test if database is accessible
                    docker-compose exec -T 202412345-db mysql -uroot -ppassword -e "SHOW DATABASES;" || exit 1
                    
                    # Test if phpMyAdmin is accessible
                    curl -f http://localhost:8081 || exit 1
                '''
            }
        }
    }
    
    post {
        always {
            echo 'Cleaning up...'
            sh 'docker-compose down'
        }
        success {
            echo 'Pipeline completed successfully!'
        }
        failure {
            echo 'Pipeline failed!'
        }
    }
}